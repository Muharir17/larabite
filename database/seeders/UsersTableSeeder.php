<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Create Admin User
        $admin = User::create([
            'name' => 'Administrator',
            'username' => 'admin',
            'email' => 'admin@larabite.com',
            'password' => Hash::make('password'),
        ]);

        // Assign admin role if using Bouncer
        $admin->assign('admin');

        // Create Regular User
        $user = User::create([
            'name' => 'User Demo',
            'username' => 'user',
            'email' => 'user@larabite.com',
            'password' => Hash::make('password'),
        ]);

        // Assign user role if using Bouncer
        $user->assign('user');

        $this->command->info('Users seeded successfully!');
        $this->command->info('Admin - Email: admin@larabite.com | Username: admin | Password: password');
        $this->command->info('User - Email: user@larabite.com | Username: user | Password: password');
    }
}
