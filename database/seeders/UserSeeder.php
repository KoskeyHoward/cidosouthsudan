<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Role;
use App\Enums\UserRole;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $this->createUser();
        $superAdminRole = Role::query()->updateOrCreate(['name' => UserRole::SUPERADMIN]);
        
        User::query()->updateOrCreate(['email' => 'superadmin@cido.org'], [

            'name' => 'Super Admin',
            'password' => Hash::make('12345678'),
            'role_id' => $superAdminRole->id,
            
        ])->assignRole($superAdminRole);

        $this->createVolunteer();
    }
    public function createUser()
    {
        $userRole = Role::query()->updateOrCreate(['name' => UserRole::USER]);

        User::query()->updateOrCreate(['email' => 'user@cidosouthsudan.org'], [
            'name' => 'employee',
            'password' => Hash::make('12345678'),
            'role_id' => $userRole->id,
            
            
        ])->assignRole($userRole);
    }
    public function createVolunteer()
    {
        $volunteerRole = Role::query()->updateOrCreate(['name' => UserRole::VOLUNTEER]);

        User::query()->updateOrCreate(['email' => 'volunteer@cidosouthsudan.org'], [
            'name' => 'Volunteer',
            'password' => Hash::make('12345678'),
            'role_id' => $volunteerRole->id,
            
            
        ])->assignRole($volunteerRole);
    }
}
