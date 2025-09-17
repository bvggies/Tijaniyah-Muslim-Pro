<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\Hash;

class SampleUsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Create roles if they don't exist
        $adminRole = Role::firstOrCreate(['name' => 'admin']);
        $userRole = Role::firstOrCreate(['name' => 'user']);

        // Create Admin User
        $admin = User::firstOrCreate(
            ['email' => 'admin@tijaniyahmuslimpro.com'],
            [
                'name' => 'Admin User',
                'password' => Hash::make('admin123'),
                'is_active' => true,
            ]
        );
        $admin->assignRole('admin');

        // Create Regular User
        $user = User::firstOrCreate(
            ['email' => 'user@tijaniyahmuslimpro.com'],
            [
                'name' => 'Test User',
                'password' => Hash::make('user123'),
                'is_active' => true,
            ]
        );
        $user->assignRole('user');

        // Create Additional Sample Users
        $users = [
            [
                'name' => 'Ahmad Hassan',
                'email' => 'ahmad@example.com',
                'password' => 'password123',
                'role' => 'user',
            ],
            [
                'name' => 'Fatima Ali',
                'email' => 'fatima@example.com',
                'password' => 'password123',
                'role' => 'user',
            ],
            [
                'name' => 'Imam Abdullah',
                'email' => 'imam@example.com',
                'password' => 'password123',
                'role' => 'admin',
            ],
        ];

        foreach ($users as $userData) {
            $user = User::firstOrCreate(
                ['email' => $userData['email']],
                [
                    'name' => $userData['name'],
                    'password' => Hash::make($userData['password']),
                    'is_active' => true,
                ]
            );
            $user->assignRole($userData['role']);
        }

        $this->command->info('Sample users created successfully!');
        $this->command->info('Admin: admin@tijaniyahmuslimpro.com / admin123');
        $this->command->info('User: user@tijaniyahmuslimpro.com / user123');
    }
}
