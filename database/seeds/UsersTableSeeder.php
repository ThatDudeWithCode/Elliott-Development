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
                'password'       => '$2y$10$rpu5pSUCdzAAypRGg6W8iOaL7RFUuTauZPpKpCCFNJ4uf2HfFBVmS',
                'remember_token' => null,
            ],
        ];

        User::insert($users);
    }
}
