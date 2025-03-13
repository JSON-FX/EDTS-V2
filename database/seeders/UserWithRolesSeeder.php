<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class UserWithRolesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $role = Role::create(['name' => 'administrator']);
        $permission = Permission::create(
            [
                'name' => 'all access',
            ],
        );

        $role->givePermissionTo($permission);

        $user = User::factory()->create([
            'name' => 'Jayson Alanano',
            'email' => 'json.alanano@gmail.com',
            'password' => Hash::make('ih3k41995'),
        ]);

        $user->assignRole($role);
        $user->givePermissionTo($permission);
    }
}
