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
               'name'=>'User',
               'phone'=>'12345678901',
               'type'=>0,
               'status'=>0,
               'password'=> bcrypt('123456'),
            ],
            [
               'name'=>'Super Admin',
               'phone'=>'12345678902',
               'type'=>1,
               'status'=>0,
               'password'=> bcrypt('123456'),
            ],
            [
               'name'=>'Manager Admin',
               'phone'=>'12345678903',
               'type'=>2,
               'status'=>0,
               'password'=> bcrypt('123456'),
            ],
            [
               'name'=>'Owner',
               'phone'=>'12345678904',
               'type'=>3,
               'status'=>0,
               'password'=> bcrypt('123456'),
            ],
            [
               'name'=>'Manager',
               'phone'=>'12345678905',
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
