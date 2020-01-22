<?php

use Illuminate\Database\Seeder;

use App\Role;

class RoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //            
        $role_regular_user = new Role;
        $role_regular_user->name = 'doctor';
        $role_regular_user->save();

        $role_admin_user = new Role;
        $role_admin_user->name = 'pharmacist';
        $role_admin_user->save();

        $role_admin_user = new Role;
        $role_admin_user->name = 'nurse';
        $role_admin_user->save();

        $role_admin_user = new Role;
        $role_admin_user->name = 'registrar';
        $role_admin_user->save();

        $role_admin_user = new Role;
        $role_admin_user->name = 'admin';
        $role_admin_user->save();

        $role_admin_user = new Role;
        $role_admin_user->name = 'unauthorised';
        $role_admin_user->save();
    }
}
