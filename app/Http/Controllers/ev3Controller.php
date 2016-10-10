<?php

namespace App\Http\Controllers;


use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Ev3;

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

    public function index() {
        $items = Ev3::join('menu', 'introev3.id_menu', '=', 'menu.id')
                ->get();
        return view('ev3.index')->with('items', $items);
    }

    public function findByName($name) {   
        $item = Ev3::join('menu', 'introev3.id_menu', '=', 'menu.id')
                ->where('menu.titulo','=',$name)
                ->get();
        return view('ev3')->with('nombre',$item);
    } 
}
