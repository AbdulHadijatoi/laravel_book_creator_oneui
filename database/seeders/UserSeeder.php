<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use App\Models\User;
use App\Models\Tutor;
use App\Models\Student;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::truncate();
        Student::truncate();
        Tutor::truncate();

        $users = [
            ['username' => 'abdulhadi',
            'email' => 'admin@gmail.com',
            'password' => Hash::make('11111111'),
            'role'=> 'Admin',
            'phone' => '03111966765',
            'firstname' => 'Adnan',
            'lastname' => 'Zaman',
            'gender' => 'Male',
            'tagline' => 'java, C++',
            'description' => 'I have 3 years of experience in teaching field. I can teach Java, Androind, Php, Laravel',
            'education' => 'BS Computer Science',
            'language' => 'Urdu',
            'location' => 'Mardan',
            'skills' => 'Java, Android, Php, Laravel, English, Writing, Coding, Programing, Graphic',
            ],
            [
            'username' => 'sanaullah',
            'email' => 'student'.'@gmail.com',
            'password' => Hash::make('11111111'),
            'role'=> 'Student',
            'phone' => '03123331212',
            'firstname' => 'Sana	',
            'lastname' => 'Ullah',
            'gender' => 'Male',
            'tagline' => 'Java, C++, Coding, Graphics',
            'description' => 'I have 3 years of experience in teaching field. I can teach Java, Androind, Php, Laravel, graphics',
            'education' => 'BS software engineering',
            'language' => 'Pashto',
            'location' => 'Karak',
            'skills' => 'Java, Android, Php, Laravel, English, Writing, Coding, Programing, Graphic',
            ],
            [
            'username' => 'hadi',
            'email' => 'teacher'.'@gmail.com',
            'password' => Hash::make('11111111'),
            'role'=> 'Teacher',
            'phone' => '03339988777',
            'firstname' => 'Abdul',
            'lastname' => 'Hadi',
            'gender' => 'Male',
            'tagline' => 'Java, C++, Androind, Graphic',
            'description' => 'I have 3 years of experience in teaching field. I can teach Java, Androind, Php, Laravel',
            'education' => 'BS Computer Science',
            'language' => 'Sindhi',
            'location' => 'Sukkur',
            'skills' => 'Java, Android, Php, Laravel, English, Writing, Coding, Programing, Graphic',
            ],
            [
            'username' => 'Naizi',
            'email' => 'niazi00@gmail.com',
            'password' => Hash::make('11111111'),
            'role'=> 'Teacher',
            'phone' => '03348754432',
            'firstname' => 'Niazi',
            'lastname' => 'Anjum',
            'gender' => 'Male',
            'tagline' => 'C++, Java, Android, Graphic',
            'description' => 'I have 3 years of experience in teaching field. I can teach Java, Androind, Php, Laravel',
            'education' => 'BS Computer Science',
            'language' => 'Punjabi',
            'location' => 'Multan',
            'skills' => 'Java, Android, Php, Laravel, English, Writing, Coding, Programing, Graphic',
            ],
            [
            'username' => 'ImranKhan',
            'email' => 'imran@gmail.com',
            'password' => Hash::make('11111111'),
            'role'=> 'Teacher',
            'phone' => '03458795456',
            'firstname' => 'Imran',
            'lastname' => 'Khan',
            'gender' => 'Male',
            'tagline' => 'C++, Java, Englihs Writing, Graphic',
            'description' => 'I have 3 years of experience in teaching field. I can teach Java, Androind, English, C++',
            'education' => 'Bs Software Engineering',
            'language' => 'Pashto',
            'location' => 'Kohat',
            'skills' => 'Java, Android, Php, Laravel, English, Writing, Coding, Programing, Graphic',
            ],
            [
            'username' => 'Gulbadin',
            'email' => 'gulbadinafghan@gmail.com',
            'password' => Hash::make('11111111'),
            'role'=> 'Teacher',
            'phone' => '03121212345',
            'firstname' => 'Gul',
            'lastname' => 'Badin',
            'gender' => 'Male',
            'tagline' => 'C++, Java, Graphic',
            'description' => 'I have 3 years of experience in teaching field. I can teach Java, Androind, Php, Laravel',
            'education' => 'Bs Software Engineering',
            'language' => 'Pashto',
            'location' => 'Peshawar',
            'skills' => 'Java, Android, Php, Laravel, English, Writing, Coding, Programing, Graphic',
            ],
            [
            'username' => 'Hafsakareem',
            'email' => 'hafsakareem@gmail.com',
            'password' => Hash::make('11111111'),
            'role'=> 'Teacher',
            'phone' => '03145687909',
            'firstname' => 'Hafsa',
            'lastname' => 'Kareem',
            'gender' => 'Female',
            'tagline' => 'Java, C++, Graphic',
            'description' => 'I have 3 years of experience in teaching field. I can teach Java, Androind, Php, Laravel',
            'education' => 'Bs Software Engineering',
            'language' => 'Sindhi',
            'location' => 'Shikarpur',
            'skills' => 'Java, Android, Php, Laravel, English, Writing, Coding, Programing, Graphic',
            ],
            [
            'username' => 'Nasir',
            'email' => 'nasir@gmail.com',
            'password' => Hash::make('11111111'),
            'role'=> 'Teacher',
            'phone' => '03121123345',
            'firstname' => 'Nasir',
            'lastname' => 'Junijo',
            'gender' => 'Male',
            'tagline' => 'English writing, C++, Java',
            'description' => 'I have 3 years of experience in teaching field. I can teach English writing, C++, Java',
            'education' => 'Bs Computer Science',
            'language' => 'Punjabi',
            'location' => 'Multan',
            'skills' => 'Java, Android, Php, Laravel, English, Writing, Coding, Programing, Graphic',
            ],
            [
            'username' => 'Abrarahmed',
            'email' => 'abrarahmed@gmail.com',
            'password' => Hash::make('11111111'),
            'role'=> 'Teacher',
            'phone' => '03112334234',
            'firstname' => 'Abrar',
            'lastname' => 'Ahmed',
            'gender' => 'Male',
            'tagline' => 'Java, C++, Laravel',
            'description' => 'I have 3 years of experience in teaching field. I can teach Java, Androind, Php, Laravel',
            'education' => 'Bs Software Engineering',
            'language' => 'Pashto',
            'location' => 'DI Khan',
            'skills' => 'Java, Android, Php, Laravel, English, Writing, Coding, Programing, Graphic',
            ],
            [
            'username' => 'Malik',
            'email' => 'malik@gmail.com',
            'password' => Hash::make('11111111'),
            'role'=> 'Student',
            'phone' => '03121212123',
            'firstname' => 'Abdul',
            'lastname' => 'Malik',
            'gender' => 'Male',
            'tagline' => 'C++, Java, PHP',
            'description' => 'I have 3 years of experience in teaching field. I can teach Java, Androind, Php, Laravel',
            'education' => 'Bs Software Engineering',
            'language' => 'Sindhi',
            'location' => 'Sukkur',
            'skills' => 'Java, Android, Php, Laravel, English, Writing, Coding, Programing, Graphic',
            ],
            [
            'username' => 'Sunail',
            'email' => 'sunail123@gmail.com',
            'password' => Hash::make('11111111'),
            'role'=> 'Student',
            'phone' => '03123321213',
            'firstname' => 'Sunail',
            'lastname' => 'Kumar',
            'gender' => 'Male',
            'tagline' => 'Laravel, PHP, English Writing',
            'description' => 'I have 3 years of experience in teaching field. I can teach Java, Androind, Php, Laravel',
            'education' => 'Bs Computer Science',
            'language' => 'Balochi',
            'location' => 'Gawader',
            'skills' => 'Java, Android, Php, Laravel, English, Writing, Coding, Programing, Graphic',
            ],
            [
            'username' => 'Subhan',
            'email' => 'subhan@gmail.com',
            'password' => Hash::make('11111111'),
            'role'=> 'Student',
            'phone' => '03124423123',
            'firstname' => 'Subhan',
            'lastname' => 'Mangi',
            'gender' => 'Male',
            'tagline' => 'C++, Java, Php, Graphic',
            'description' => 'I have 3 years of experience in teaching field. I can teach Java, Androind, Php, Graphic',
            'education' => 'Bs Computer Science',
            'language' => 'Sindhi',
            'location' => 'Sukkur',
            'skills' => 'Java, Android, Php, Laravel, English, Writing, Coding, Programing, Graphic',
            ],
            [
            'username' => 'Gul',
            'email' => 'gulahmed@gmail.com',
            'password' => Hash::make('11111111'),
            'role'=> 'Student',
            'phone' => '03124455354',
            'firstname' => 'Gul',
            'lastname' => 'Khan',
            'gender' => 'Male',
            'tagline' => 'Laravel, Java, C++',
            'description' => 'I have 3 years of experience in teaching field. I can teach Java, C++, Php',
            'education' => 'Bs Software Engineering',
            'language' => 'Pashto',
            'location' => 'Sawabi',
            'skills' => 'Java, Android, Php, Laravel, English, Writing, Coding, Programing, Graphic',
            ],
            [
            'username' => 'Naila',
            'email' => 'naila@gmail.com',
            'password' => Hash::make('11111111'),
            'role'=> 'Student',
            'phone' => '03009823421',
            'firstname' => 'Naila',
            'lastname' => 'Parveen',
            'gender' => 'Female',
            'tagline' => 'Php, Grpahic',
            'description' => 'I have 3 years of experience in teaching field. I can teach Php, Graphic',
            'education' => 'Bs Software Engineering',
            'language' => 'Punjabi',
            'location' => 'Sahiwal',
            'skills' => 'Java, Android, Php, Laravel, English, Writing, Coding, Programing, Graphic',
            ],
            [
            'username' => 'Naeeda',
            'email' => 'naeeda@gmail.com',
            'password' => Hash::make('11111111'),
            'role'=> 'Stduent',
            'phone' => '03023121322',
            'firstname' => 'Naeeda',
            'lastname' => 'Mobin',
            'gender' => 'Female',
            'tagline' => 'Java, Android, Php',
            'description' => 'I have 3 years of experience in teaching field. I can teach Java, Androind, Php',
            'education' => 'Bs Software Engineering',
            'language' => 'Punjabi',
            'location' => 'Rawalpindi',
            'skills' => 'Java, Android, Php, Laravel, English, Writing, Coding, Programing, Graphic',
            ],
            [
            'username' => 'Parveen',
            'email' => 'parveen@gmail.com',
            'password' => Hash::make('11111111'),
            'role'=> 'Stduent',
            'phone' => '03098756421',
            'firstname' => 'Parveen',
            'lastname' => 'Shakir',
            'gender' => 'Female',
            'tagline' => 'Java, Laravel, Php',
            'description' => 'I have 3 years of experience in teaching field. I can teach Java, Php, Laravel',
            'education' => 'Bs Computer Science',
            'language' => 'Sindhi',
            'location' => 'Sukkur',
            'skills' => 'Java, Android, Php, Laravel, English, Writing, Coding, Programing, Graphic',
            ],
            [
            'username' => 'naseem',
            'email' => 'naseem@gmail.com',
            'password' => Hash::make('11111111'),
            'role'=> 'Stduent',
            'phone' => '03122121213',
            'firstname' => 'Naseem',
            'lastname' => 'Ullah',
            'gender' => 'Male',
            'tagline' => 'C++, Java',
            'description' => 'I have 3 years of experience in teaching field. I can teach Java, C++',
            'education' => 'Bs Computer Science',
            'language' => 'punjabi',
            'location' => 'Rawalpindi',
            'skills' => 'Java, Android, Php, Laravel, English, Writing, Coding, Programing, Graphic',
            ],
            [
            'username' => 'Qasid',
            'email' => 'qasid@gmail.com',
            'password' => Hash::make('11111111'),
            'role'=> 'Student',
            'phone' => '03124444321',
            'firstname' => 'Qasid',
            'lastname' => 'Mehmood',
            'gender' => 'Male',
            'tagline' => 'Php, Laravel',
            'description' => 'I have 3 years of experience in teaching field. I can teach Java, Android, Php, Laravel',
            'education' => 'Bs Software Engineering',
            'language' => 'Pashto',
            'location' => 'Karak',
            'skills' => 'Java, Android, Php, Laravel, English, Writing, Coding, Programing, Graphic',
            ],
            [
            'username' => 'Wahid',
            'email' => 'wahid@gmail.com',
            'password' => Hash::make('11111111'),
            'role'=> 'Teacher',
            'phone' => '03167789765',
            'firstname' => 'Wahid',
            'lastname' => 'Ullah',
            'gender' => 'Male',
            'tagline' => 'English, Graphic',
            'description' => 'I have 3 years of experience in teaching field. I can teach English, Graphic',
            'education' => 'Bs Computer Science',
            'language' => 'pashto',
            'location' => 'Mardan',
            'skills' => 'Java, Android, Php, Laravel, English, Writing, Coding, Programing, Graphic',
            ],
            [
            'username' => 'Yasir',
            'email' => 'yasir@gmail.com',
            'password' => Hash::make('11111111'),
            'role'=> 'Teacher',
            'phone' => '03000110100',
            'firstname' => 'Yasir',
            'lastname' => 'Shami',
            'gender' => 'Male',
            'tagline' => 'Android, Java',
            'description' => 'I have 3 years of experience in teaching field. I can teach Android, Php',
            'education' => 'Bs Software Engineering',
            'language' => 'Pashto',
            'location' => 'Kohat',
            'skills' => 'Java, Android, Php, Laravel, English, Writing, Coding, Programing, Graphic',
            ]
        ];

        $tutors = [
            [
                'user_id' => 3,
            ],
            [
                'user_id' => 4,
            ],
            [
                'user_id' => 5,
            ],
            [
                'user_id' => 6,
            ],
            [
                'user_id' => 7,
            ],
            [
                'user_id' => 8,
            ],
            [
                'user_id' => 9,
            ],
            [
                'user_id' => 19,
            ],
            [
                'user_id' => 20,
            ]
        ];
        $students = [
            [
                'user_id' => 2,
            ],
            [
                'user_id' => 10,
            ],
            [
                'user_id' => 11,
            ],
            [
                'user_id' => 12,
            ],
            [
                'user_id' => 13,
            ],
            [
                'user_id' => 14,
            ],
            [
                'user_id' => 15,
            ],
            [
                'user_id' => 16,
            ],
            [
                'user_id' => 17,
            ],
            [
                'user_id' => 18,
            ]
        ];
        User::insert($users);
        Tutor::insert($tutors);
        Student::insert($students);

    }
}
