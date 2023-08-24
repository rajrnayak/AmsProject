<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Auth;

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

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('guest')->except('logout');
    }
    public function GetLogin(){
        return view('login');
    }
    public function PostLogin(Request $request){
        $input = $request->all();
        // dd($input);
        // dd($input , auth()->user() && auth()->user()->role == 2);
        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required',
            'role' => 'required',
        ]);

        if (auth()->attempt(array('email' => $input['email'], 'password' => $input['password'], 'role' => $input['role'])))
        {
            // dd($input , auth()->user() && auth()->user()->role == 2);
            if (auth()->user() && auth()->user()->role == 2)
            {
              return redirect()->route('Admin.dashboard');
            }
            else if (auth()->user() && auth()->user()->role == 1)
            {
              return redirect()->route('faculty.dashboard');
            }
            else if (auth()->user() && auth()->user()->role == 0)
            {
              return redirect()->route('student.dashboard');
            }
            // else
            // {
            //   return url('/');
            // }
        }
        else
        {
            return redirect()->route('getLogin');
        }
    }
}
