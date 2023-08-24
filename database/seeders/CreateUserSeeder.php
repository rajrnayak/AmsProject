<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class CreateUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $users = [
            [
               'email'=>'student@abc.com',
               'role'=> 0,
               'password'=> bcrypt('123456'),
            ],
            [
               'email'=>'faculty@abc.com',
               'role'=> 1,
               'password'=> bcrypt('123456'),
            ],
            [
               'email'=>'admin@abc.com',
               'role'=> 2,
               'password'=> bcrypt('123456'),
            ],

        ];

        foreach ($users as $key => $user)
        {
            User::create($user);
        }
    }
}
