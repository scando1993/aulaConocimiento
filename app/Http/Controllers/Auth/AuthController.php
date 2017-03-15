<?php

namespace App\Http\Controllers\Auth;

use App\User;
use Illuminate\Support\Facades\Auth;
use Validator;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\ThrottlesLogins;
use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;

class AuthController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Registration & Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users, as well as the
    | authentication of existing users. By default, this controller uses
    | a simple trait to add these behaviors. Why don't you explore it?
    |
    */

    use AuthenticatesAndRegistersUsers, ThrottlesLogins;

    /**
     * Where to redirect users after login / registration.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    protected $redirectAfterLogout = 'http://localhost:8000';
    /**
     * Create a new authentication controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware($this->guestMiddleware(), ['except' => 'logout']);
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => 'required|max:255',
            'email' => 'required|email|max:255|unique:users',
            'password' => 'required|confirmed|min:6',
            'terms' => 'required',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return User
     */
    protected function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
        ]);
    }
    
    protected function getLogin(){
//        if(Auth::attempt(['email' => "admin2@gmail.com", 'password' => "admin2"]))
//            if(Auth::check())
//                \Redirect::home();
    }
    
    protected function getAdminLogin(){
        if(Auth::attempt(['email' => "admin2@gmail.com", 'password' => "admin2"]))
            if(Auth::check())
                \Redirect::to('/');
    }
    
    protected function getUserLogin(){
        if(Auth::attempt(['email' => "estudiante@gmail.com", 'password' => "estudiante"]))
            if(Auth::check())
                \Redirect::to('/');
    }
    
    protected function getLogout(){
        Auth::guard($this->getGuard())->logout();
        \Redirect::away('http://138.197.34.45:8000');
    }
}
