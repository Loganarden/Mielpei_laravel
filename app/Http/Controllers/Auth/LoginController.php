<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Providers\RouteServiceProvider;
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
    //protected $redirectTo = RouteServiceProvider::HOME;

    public function redirectTO(){
        switch (Auth::user()->roles){
            case 1:
                $this->redirectTO = '/admin';
                return $this->redirectTO;
                break;
            case 2:
                $this->redirectTO= '/producteur';
                return $this->redirectTO;
                break;
            case 3:
                $this->redirectTO= '/user';
                return $this->redirectTO;
                break;
            default:
                $this->redirectTO = '/login';
                return $this->redirectTO;
                break;
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
