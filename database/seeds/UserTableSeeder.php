<?php

use Illuminate\Database\Seeder;
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
        $ra=Role::where('name','Admin')->first();
        $ru=Role::where('name','User')->first();
        $rs=Role::where('name','Store Mgr')->first();
        $rp=Role::where('name','Purchase Officer')->first();


        $u=new User();
        $u->name='abc';
        $u->email='a@gmail.com';
        $u->password=bcrypt('password');
        $u->department=3;
        $u->save();
        $u->roles()->attach($ra);

    }
}
