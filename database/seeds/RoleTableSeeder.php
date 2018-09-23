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
        $r_admin=new Role();
        $r_admin->name='Admin';
        $r_admin->save();
        $r_user=new Role();
        $r_user->name='User';
        $r_user->save();
        $r_admin=new Role();
        $r_admin->name='Purchase Officer';
        $r_admin->save();
        $r_admin=new Role();
        $r_admin->name='Store Mgr';
        $r_admin->save();
        

    }
}
