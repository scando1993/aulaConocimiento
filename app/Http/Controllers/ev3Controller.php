<?php

namespace App\Http\Controllers;


use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Ev3;
use App\Menu;

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
        $id_padre = Menu::where('id_padre', '=', 2)  
                ->lists('titulo', 'id') 
                ->toArray();

        return view('ev3.index')->with('items', $items)->with('id_padre',$id_padre);
    }

    public function findByName($name) {   
        $item = Ev3::join('menu', 'introev3.id_menu', '=', 'menu.id')
                ->where('menu.titulo','=',$name)
                ->get();
        return view('ev3')->with('nombre',$ev3);
    }

    public function create(){

        return view('ev3.create');
    }

    public function store(Request $request){
        $idMenu = Menu::create([
            'id_padre' => $request->id_padre,
            'id_curso' => 1,
            'titulo' => $request->titulo,
            'descripcion' => $request->descripcion,
            'esHoja' => 1,
            'activo' => 1
            ])->id;
        Ev3::create([
            'id_menu' => $idMenu,
            'ruta' => $request->ruta
            ]);
        return redirect()->route('ev3.index')
                        ->with('Excelente','Item creado exitosamente');
    }
}
