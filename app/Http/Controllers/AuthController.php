<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
class AuthController extends Controller
{
    public function index()
    {
        return view('auth.login');
    }  
      
    public function loginUser(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);
   
        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            return redirect()->intended('dashboard')
                        ->withSuccess('Signed in');
        }
  
        return redirect("login")->withSuccess('Login details are not valid');
    }

    public function register()
    {
        return view('auth.signup');
    }
      
    public function registerUser(Request $request)
    {  
        $request->validate([
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6',
            'password_confirm' => 'required|min:6',
        ]);
        
        if($request->password != $request->password_confirm){
            return back()->withSuccess('Passwords do not match');
        }
        $data = $request->all();
        $check = $this->createUser($data);
         
        return redirect("dashboard")->withSuccess('You have signed-in');
    }

    public function createUser(array $data)
    {
      return User::create([
        'email' => $data['email'],
        'password' => Hash::make($data['password'])
      ]);
    }    
    
    public function dashboard()
    {
        if(Auth::check()){
            return view('dashboard');
        }
  
        return redirect("login")->withSuccess('You are not allowed to access');
    }
    
    public function logOut() {
        Session::flush();
        Auth::logout();
  
        return Redirect('login');
    }
}