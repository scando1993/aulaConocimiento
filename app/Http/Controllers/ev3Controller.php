<?php

namespace App\Http\Controllers;


use App\Http\Requests;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;

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
        
        $ev3 = DB::table('introev3')
            ->join('menu', 'introev3.id_menu', '=', 'menu.id')
            ->where('menu.titulo','=',$nombre)
            ->get();



        //$bloque= string($nombre);
        //$menu = DB::table('menu')->where('titulo',$nombre);

        //$menu = DB::table('menu')->get();
        return view('ev3')->with('nombre',$ev3);
    } 
}
