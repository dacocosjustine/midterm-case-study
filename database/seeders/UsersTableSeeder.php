<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    public function run()
    {
        $users = [
            ['name' => 'Justine Dacocos', 'email' => 'dacocos@example.com', 'password' => Hash::make('password')],
            ['name' => 'Admin', 'email' => 'admin@localhost', 'password' => Hash::make('password'), 'is_admin' => true],
            ['name' => 'User', 'email' => 'user@localhost', 'password' => Hash::make('password')],
            ['name' => 'Moderator', 'email' => 'moderator@localhost', 'password' => Hash::make('password'), 'is_moderator' => true],
            ['name' => 'Guest', 'email' => 'guest@localhost', 'password' => Hash::make('password'), 'is_guest' => true]
        ];

        foreach ($users as $user) {
            \App\Models\User::create($user);
        }
    }
}