<?php

namespace App\Http\Controllers;


use App\Http\Requests;
use Illuminate\Http\Request;


class ev3Controller extends Controller
{
     /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        
    }

    /**
     * Show the application dashboard.
     *
     * @return Response
     */
    public function index($nombre)
    {   
        return view('ev3')->with('nombre',$nombre);
    } 
}
