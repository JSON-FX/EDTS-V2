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
        $user = User::factory()->create([
            'name' => 'Jayson Alanano',
            'email' => 'json.alanano@gmail.com',
            'department_id' => 2,
            'password' => Hash::make('ih3k41995'),
        ]);

        $user->assignRole('super-admin');
        $user->syncPermissions(Permission::all());
    }
}
