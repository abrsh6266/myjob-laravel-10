<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Role;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory(1)->create();
        $role = Role::create(["name"=> "seeker"]);
        $role = Role::create(["name"=> "employer"]);
        $user = User::factory()->create([
            'first_name' => 'Employer',
            'last_name'=> 'Employer',
            'email' => 'admin@example.com',
            'password'=> Hash::make('12345678'),
        ]);
        $user->assignRole($role);
    }
}
