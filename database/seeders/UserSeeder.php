<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use App\Models\User;
use Illuminate\Support\Facades\Hash;


class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //


        User::updateOrCreate(['email' => 'superadmin@cidosouthsudan.org'], [
            'name' => 'Super Admin',
            'password' => bcrypt('password'),
            // Hashed password
            'is_super_admin' => true,
            // Add a flag for super admin
        ]);
    }
}
