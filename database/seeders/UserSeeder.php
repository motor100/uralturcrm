<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\Role;
use App\Models\User;
use App\Models\Permission;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $developer = Role::where('slug','web-developer')->first();
        $manager = Role::where('slug', 'manager')->first();
        $createTasks = Permission::where('slug','create-tasks')->first();
        $manageUsers = Permission::where('slug','manage-users')->first();

        $user1 = new User();
        $user1->name = 'Jhon Deo';
        $user1->email = 'jhondeo@gmail.com';
        $user1->password = Hash::make('secret');
        $user1->save();
        $user1->roles()->attach($developer);
        $user1->permissions()->attach($manageUsers);

        $user2 = new User();
        $user2->name = 'Mike Thomas';
        $user2->email = 'mikethomas@gmail.com';
        $user2->password = Hash::make('secret');
        $user2->save();
        $user2->roles()->attach($manager);
        $user2->permissions()->attach($createTasks);
    }
}
