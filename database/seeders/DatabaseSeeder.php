<?php

namespace Database\Seeders;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();
        $this->call(DocumentTypeSeeder::class);
        $this->call(DepartmentSeeder::class);
        $this->call(RolesPermissionsSeeder::class);
        $this->call(UserWithRolesSeeder::class);
    }
}
