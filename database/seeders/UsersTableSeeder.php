<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    public function run()
    {
        $users = [
            ['name' => 'Justine Dacocos', 'email' => 'dacocos@example.com', 'password' => Hash::make('password')]
            ['name' => 'Jeremiah Custodio', 'email' => 'custodio@example.com', 'password' => Hash::make('password')]
        ];

        foreach ($users as $user) {
            \App\Models\User::create($user);
        }
    }
}