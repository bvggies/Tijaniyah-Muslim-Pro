<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Illuminate\Support\Facades\Hash;

class AdminUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Create roles
        $adminRole = Role::create(['name' => 'admin']);
        $userRole = Role::create(['name' => 'user']);

        // Create permissions
        $permissions = [
            'manage_users',
            'manage_adhkars',
            'manage_sermons',
            'manage_campaigns',
            'manage_donations',
            'manage_posts',
            'manage_replies',
            'view_analytics',
        ];

        foreach ($permissions as $permission) {
            Permission::create(['name' => $permission]);
        }

        // Assign all permissions to admin role
        $adminRole->givePermissionTo(Permission::all());

        // Create admin user
        $admin = User::create([
            'name' => 'Admin User',
            'email' => 'admin@tijaniyahmuslimpro.com',
            'password' => Hash::make('password'),
            'is_active' => true,
        ]);

        // Assign admin role to admin user
        $admin->assignRole('admin');

        // Create a regular user for testing
        $user = User::create([
            'name' => 'Test User',
            'email' => 'user@tijaniyahmuslimpro.com',
            'password' => Hash::make('password'),
            'is_active' => true,
        ]);

        // Assign user role to regular user
        $user->assignRole('user');
    }
}
