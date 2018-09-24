<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
<<<<<<< HEAD
    // protected $redirectstr;
    // public function setredirect(){
    //     $redirectstr='/home';
    // $actions=$request->route()->getAction();
    // $roles=isset($actions['roles'])? $actions['roles']:null;
    // if ($request->user()->hasAnyRole($roles)){
    //     $redirectstr='/'.$roles[0];
    // }

    // }
    
    // protected $redirectTo = '/home';
    // protected $redirectTo = $redirectstr;
=======
    protected $redirectTo = '/home';
>>>>>>> d360023cbe9d7b60c27642ad6a2c723e66edd221

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
<<<<<<< HEAD
    protected function authenticated($request, $user)
    {
        // echo $request;
        // return 'xx';
        $redirectstr='/home';
        // $uroles=Role::where('user_id',$user['id'])->all();
        // foreach ($urole as $role){
        //     $user->roles()->attach($role);
        // }
        $actions=$request->route()->getAction();
        // $roles=isset($actions['roles'])? $actions['roles']:null;
        if ($request->user()->hasAnyRole(['Admin','User','Purchase Officer','Store Mgr'])){
            foreach (['Admin','User','Purchase Officer','Store Mgr'] as $role){
                if ($request->user()->hasRole($role)){
                    if ($role=='Admin'||$role=='User'){
                        $redirectstr='/'.strtolower($role);
                    }
                    elseif($role=='Purchase Officer'){
                        $redirectstr='/po/';
                    }
                    elseif($role=='Store Mgr'){
                        $redirectstr='/sm/';
                    }
                    
                }

            }
            
        }
        echo $redirectstr.'<br>';
        // print_r($actions);
        // return 'xx';
        return redirect($redirectstr);
    }

=======
>>>>>>> d360023cbe9d7b60c27642ad6a2c723e66edd221
}
