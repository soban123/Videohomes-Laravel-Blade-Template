<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\support\Facades\Auth ;
use Illuminate\Http\Request ;
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
    // protected $redirectTo = RouteServiceProvider::HOME;



    // public function redirectTo()
    // {
    //     if(  Auth::user()->hasrole('1') ){
    //          $redirectTo = RouteServiceProvider::HOME;
    //          return $redirectTo ;
    //     }
    // }

    public function authenticate(Request $request)
    {
       

            // $credentials = $request->only('email', 'password');

            if (Auth::attempt(['email' => $email, 'password' => $password, 'role' => 1])) {
                // Authentication passed...
                return redirect()->intended('dashboard');
            }

        

      
    }

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

  
}
