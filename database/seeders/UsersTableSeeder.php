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
            ['name' => 'Admin', 'email' => 'admin@localhost', 'password' => Hash::make('password')],
            ['name' => 'User', 'email' => 'user@localhost', 'password' => Hash::make('password')],
            ['name' => 'Moderator', 'email' => 'moderator@localhost', 'password' => Hash::make('password')],
            ['name' => 'Guest', 'email' => 'guest@localhost', 'password' => Hash::make('password')],
            ['name' => 'Super User', 'email' => 'superuser@localhost', 'password' => Hash::make('password')],
            ['name' => 'John Doe', 'email' => 'djohndoe@example.com', 'password' => Hash::make('password')],
            ['name' => 'Jane Doe', 'email' => 'doejane@example.com', 'password' => Hash::make('password')],
            ['name' => 'Juan Dela Cruz', 'email' => 'dcruzjuan@example.com', 'password' => Hash::make('password')],
            ['name' => 'Juan Pablo', 'email' => 'pablojuan@example.com', 'password' => Hash::make('password')],
            ['name' => 'Charlse Henrique', 'email' => 'henriquecharlos@example.com', 'password' => Hash::make('password')],
            ['name' => 'Sherlock Holmes', 'email' => 'sholmes@example.com', 'password' => Hash::make('password')],
            ['name' => 'Jeanne Baark', 'email' => 'baarkjeanne@example.com', 'password' => Hash::make('password')],
            ['name' => 'Marie Antone', 'email' => 'antonemarie@example.com', 'password' => Hash::make('password')],
            ['name' => 'Java Suarzez', 'email' => 'suarzez@example.com', 'password' => Hash::make('password')],
            ['name' => 'Da Vinki', 'email' => 'dvinki@example.com', 'password' => Hash::make('password')],
            ['name' => 'Arthur Pena', 'email' => 'penaarthur@example.com', 'password' => Hash::make('password')]
            
        ];

        foreach ($users as $user) {
            \App\Models\User::create($user);
        }
    }
}