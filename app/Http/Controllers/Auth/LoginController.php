<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Contracts\Auth\Guard;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
    protected $redirectTo;
    public function redirectTo()
    {
        switch(Auth::user()->role){
            case 'Admin':
                $this->redirectTo = '/admin';
                return $this->redirectTo;
                break;
            case 'User':
                $this->redirectTo = '/User';
                return $this->redirectTo;
                break;
            case 'seller':
                $this->redirectTo = '/seller';
                return $this->redirectTo;
                break;

            default:
                $this->redirectTo = '/login';
                return $this->redirectTo;
        }

        // return $next($request);
    }

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(Guard $auth)
    {
        $this->auth = $auth;
        $this->middleware('guest')->except('logout');

    }
    public function login(Request $request) {

        $this->validate($request, [
            'email'    => 'required',
            'password' => 'required',
        ]);

        $credentials = $request->only( 'email', 'password' );




        if( $this->auth->attempt($credentials, $request->has('remember')) ){

            if($this->auth->user()->email != $request->email)
            {

                return redirect()->back();

            }
            if($this->auth->user()->status == 'active') {


                if($this->auth->user()->role === 'Admin')
                {

                    return redirect()->intended('admin/');

                }else if($this->auth->user()->role == 'agency'){

                    return redirect()->intended('user/profile');

                }else if($this->auth->user()->role =='employee'){

                    return redirect()->intended('admin/');
                }


            }
            else if($this->auth->user()->status == 'pending' )
            {

                Auth::logout();
                //  $this->auth->logout();

                return redirect()->back();
            }

        }else{

            return redirect()->back();
        }


    }
    public function logout(Request $request) {
        Auth::logout();
        return redirect('/login');
    }
}
