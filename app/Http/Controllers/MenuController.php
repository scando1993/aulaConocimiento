<?php

namespace App\Http\Controllers;


use App\Http\Requests;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;

class MenuController extends Controller
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
        
        $ev3 = DB::table('menu')
            ->where('menu.id_padre','=',null)
            ->get();



        //$bloque= string($nombre);
        //$menu = DB::table('menu')->where('titulo',$nombre);

        //$menu = DB::table('menu')->get();
        return view('ev3')->with('nombre',$ev3);
    } 
    public function listarDocumentos($id)
    {   
        
        $ev3 = DB::table('menu')
            ->where('menu.id_padre','=',null)
            ->get();



        //$bloque= string($nombre);
        //$menu = DB::table('menu')->where('titulo',$nombre);

        //$menu = DB::table('menu')->get();
        return view('ev3')->with('nombre',$ev3);
    } 
}