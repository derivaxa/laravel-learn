<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\User;
use App\Role;
class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $user = new User;
        $user->name = 'Andre Dove';
        $user->email = 'andre@doe.org.au';
        $user->password = bcrypt('qwerty123');
        $user->save();
        $user->roles()->attach(Role::where('name', 'doctor')->first());

        $admin = new User;
        $admin->name = 'Alex Casinader';
        $admin->email = 'alex@mail.org.au';
        $admin->password = bcrypt('qwerty123');
        $admin->save();
        $admin->roles()->attach(Role::where('name', 'admin')->first());
    }
}
