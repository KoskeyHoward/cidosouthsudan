<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Role;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        
        User::query()->updateOrCreate(['email' => 'superadmin@cido.org'], [

            'name' => 'Super Admin',
            'password' => Hash::make('12345678'),
            'is_admin' => 1,
        ]);
    }
}
