<?php

use App\User;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    public function run()
    {
        $users = [
            [
                'id'             => 1,
                'name'           => 'Admin',
                'email'          => 'admin@admin.com',
                'password'       => '$2y$10$FRG1F2ExMvFPl.m/Hu9.BOQiwyZEHNMP.4fppqkNge20Yweu1RIuy',
                'remember_token' => null,
                'created_at'     => '2019-09-15 19:17:10',
                'updated_at'     => '2019-09-15 19:17:10',
            ],
        ];

        User::insert($users);
    }
}
