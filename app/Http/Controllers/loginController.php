<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesResources;
use Illuminate\Support\Facades\Hash;
use DB;

class loginController extends BaseController
{
    public function login (Request $req){
    	$username = $req-> input('email');
    	$password = Hash::make($req-> input('password'));

    	$checkLogin = User::where(['email'=>$username, 'password'=>$password])->get();

        if(count($checkLogin) >-1){
    		return redirect()->guest('home');
    	}
    	else{
    		echo "No such user";
    	}
    }
}
