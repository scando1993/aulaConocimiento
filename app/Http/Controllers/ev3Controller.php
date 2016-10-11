<?php

namespace App\Http\Controllers;


use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use File;
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
        return view('ev3')->with('nombre',$item);
    }

    public function eliminarregistro($id) {   
        DB::table('menu')
            ->where('id', $id)
            ->update(['activo' => 0]);
        return redirect()->route('ev3.index')
                        ->with('Excelente','Item creado exitosamente');
    }  

    public function create(){
        return view('ev3.create');
    }

    public function store(Request $request) {
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
            'ruta' => $request->uploadFile
            ]);

        $file = $request->file('uploadFile');
        if ($file)
            {
                 $nombreobj = $file->getClientOriginalName();
                //configurar ruta local en config-->filisystem
                \Storage::disk('local')->put($nombreobj, \File::get($file));
                $request['archivo']=$nombreobj;
                $extension=substr( $nombreobj , -4);
                $request['extension']=$extension;
                $narchivo=$nombreobj;
                $narchivo=substr($narchivo, 0,strlen($narchivo)-4);
                $request['nombre_archivo']=$narchivo;
            }
        return redirect()->route('ev3.index')
                        ->with('Excelente','Item creado exitosamente');
    }

    public function edit($id) {
        // $item = Ev3::find($id);
        // $itemMenu = Menu::find($item->id_menu)
        // return view('ev3.editar_ev3')->with('itemEv3', $item)->with('itemMenu', $itemMenu);
    }

    public function update(Request $request, $id) {
        $ev3 = Ev3::find($id);
        $ev3Id = $ev3->id;
        $menuId = $ev3->id_menu;
        Ev3::find($id)->update($request->all());
        Menu::find($menuId)->update($request->all());
        return redirect()->route('ev3.show',$ev3Id)
                        ->with('success','Item actualizado correctamente');
    }
}
