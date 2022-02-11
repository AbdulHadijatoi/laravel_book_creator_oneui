@extends('layouts.simple')

@section('title','Sign in')

@section('content')
    <!-- Page Content -->
    <div class="bg-image" style="background-image: url('assets/media/photos/photo28@2x.jpg');">
        <div class="row g-0 bg-primary-dark-op">
            <!-- Main Section -->
            <div class="hero-static col-lg-12 d-flex flex-column align-items-center bg-body-light">
                <div class="p-3 w-100 text-center">
                <a class="link-fx fw-semibold fs-3 text-dark" href="index.html">
                    Book<span class="fw-normal">Writer</span>
                </a>
                </div>
                <div class="p-4 w-100 flex-grow-1 d-flex align-items-center">
                <div class="w-100">
                    <!-- Header -->
                    <div class="text-center mb-5">
                    <h1 class="fw-bold mb-2">
                        Sign In
                    </h1>
                    <p class="fw-medium text-muted">
                        Welcome, please signin or <a href="{{url('/signup')}}">sign up</a> for a new account.
                    </p>
                    </div>
                    <!-- END Header -->

                    <!-- Sign In Form -->
                    <!-- jQuery Validation (.js-validation-signin class is initialized in js/pages/op_auth_signin.min.js which was auto compiled from _js/pages/op_auth_signin.js) -->
                    <!-- For more info and examples you can check out https://github.com/jzaefferer/jquery-validation -->
                    <div class="row g-0 justify-content-center">
                    <div class="col-sm-8 col-xl-4">
                        <form class="js-validation-signin" action="be_pages_auth_all.html" method="POST">
                        <div class="mb-4">
                            <input type="text" class="form-control form-control-lg form-control-alt py-3" id="signin_username" name="signin_username" placeholder="Username">
                        </div>
                        <div class="mb-4">
                            <input type="password" class="form-control form-control-lg form-control-alt py-3" id="signin_password" name="signin_password" placeholder="Password">
                        </div>
                        <div class="d-flex justify-content-between align-items-center mb-4">
                            <div>
                            <a class="text-muted fs-sm fw-medium d-block d-lg-inline-block mb-1" href="op_auth_reminder3.html">
                                Forgot Password?
                            </a>
                            </div>
                            <div>
                            <button type="submit" class="btn btn-lg btn-alt-primary">
                                <i class="fa fa-fw fa-sign-in-alt me-1 opacity-50"></i> Sign In
                            </button>
                            </div>
                        </div>
                        </form>
                    </div>
                    </div>
                    <!-- END Sign In Form -->
                </div>
                </div>
                <div class="px-4 py-3 w-100 d-flex flex-column flex-sm-row justify-content-between fs-sm text-center text-sm-start">
                    <p class="fw-medium text-black-50 py-2 mb-0">
                        <strong>BookWrite</strong> &copy; <span data-toggle="year-copy"></span>
                    </p>
                    <ul class="list list-inline py-2 mb-0">
                        <li class="list-inline-item">
                        <a class="text-muted fw-medium" href="javascript:void(0)">Legal</a>
                        </li>
                        <li class="list-inline-item">
                        <a class="text-muted fw-medium" href="javascript:void(0)">Contact</a>
                        </li>
                        <li class="list-inline-item">
                        <a class="text-muted fw-medium" href="javascript:void(0)">Terms</a>
                        </li>
                    </ul>
                </div>
            </div>
            <!-- END Main Section -->
        </div>
    </div>
    <!-- END Page Content -->
@endsection
