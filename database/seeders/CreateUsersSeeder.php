<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class CreateUsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = [
            [
               'photo'=>'demo.jpg',
               'title'=>'Mr.',
               'name'=>'User',
               'phone'=>'012345678900',
               'email'=>'user@gmail.com',
               'type'=>0,
               'status'=>0,
               'password'=> bcrypt('123456'),
            ],
            [
               'photo'=>'demo.jpg',
               'title'=>'Mr.',
               'name'=>'Super Admin User',
               'phone'=>'012345678901',
               'email'=>'super-admin@gmail.com',
               'type'=>1,
               'status'=>0,
               'password'=> bcrypt('123456'),
            ],
            [
              'photo'=>'demo.jpg',
              'title'=>'Mr.',
              'name'=>'Agent Admin User',
              'phone'=>'012345678902',
              'email'=>'agent-admin@gmail.com',
              'type'=>2,
              'status'=>0,
              'password'=> bcrypt('123456'),
            ],
            [
              'photo'=>'demo.jpg',
              'title'=>'Mr.',
              'name'=>'Garage Owner User',
              'phone'=>'012345678903',
              'email'=>'garage-owner@gmail.com',
              'type'=>3,
              'status'=>0,
              'password'=> bcrypt('123456'),
            ],
            [
              'photo'=>'demo.jpg',
              'title'=>'Mr.',
              'name'=>'Garage Manager User',
              'phone'=>'012345678904',
              'email'=>'garage-manager@gmail.com',
              'type'=>4,
              'status'=>0,
              'password'=> bcrypt('123456'),
            ],
        ];

        foreach ($users as $key => $user) {
            User::create($user);
        }
    }
}
