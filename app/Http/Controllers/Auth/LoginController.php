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
    public function Login(){
        if(auth()->user()){
            $route = $this->RedirectDash();
            return redirect()->route($route);
        }
        return view('login');
    }
    public function PostLogin(Request $request){
        $input = $request->all();
        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required',
        ]);
        $email = $request->input('email');
        $password = $request->input('password');
        $attempt = Auth::attempt(['email' => $email, 'password' => $password]);

        if($attempt)
        {

            $route = $this->RedirectDash();
            return redirect()->route($route);
        }
        else
        {
            return redirect()->route('getLogin');
        }
    }

    public function LoadLogin(){
        if(auth()->user()){
            $route = $this->RedirectDash();
            return redirect()->route($route);
        }
        else{
            return redirect()->route('getLogin');
        }
    }

    public function RedirectDash(){
        $redirect = '';

        if (auth()->check() && auth()->user()->role == 2)
            {
                $redirect = 'Admin.dashboard';
            }
            else if (auth()->check() && auth()->user()->role == 1)
            {
              $redirect = 'faculty.dashboard';
            }
            else if (auth()->check() && auth()->user()->role == 0)
            {
              $redirect = 'student.dashboard';
            }

        return $redirect;
    }

    public function Logout(Request $request)
    {
        Auth::Logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
}
