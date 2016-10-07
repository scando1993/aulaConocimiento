<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use App\Menu;


class MenuController extends Controller {

	public function index() { 
		$data = Menu::all();
        return view('menu')->with('data',$data);
    }

	public function index2($nombre) { 
		$ev3 = Menu::where('menu.titulo','=',$nombre)
				->get();
        return view('ev3')->with('nombre',$ev3);
    } 

	public function showFathers(){
		$menuList = Menu::whereNull('id_padre')
					->get();
     	return view('menu.index')->with('menuList', $menuList);
	}

	public function showSonsById($id){
		$data = Menu::where('menu.id_padre','=',$id)
					->get();
     	return view('menu.sons')->with('data', $data);
	}
	
	public function create(){
		return view::make('menu.create');
	}

	public function store(Request $request){
        try {
        	$menu = new Menu();
        	$menu->id_padre 	=$request->id_padre;
        	$menu->id_curso		=$request->id_curso;
        	$menu->titulo		=$request->titulo;
        	$menu->esHoja 		=$request->esHoja;
        	$menu->activo 		=$request->activo;
        	$menu->save();

        	return redirect()->route('menu.index');
        }
        catch(Exception $e){
        	return "Fatal error - ".$e->getMessage();
        }
	}	

	public function show(){

	}

	public function edit($id){
		$menu = Menu::findOrFail($id);
		return view('menu.edit', compact('menu'));
	}

	public function update(Request $request,$id){
		$menu = Menu::findOrFail($id);
		$menu->id_padre 	=$request->id_padre;
    	$menu->id_curso		=$request->id_curso;
    	$menu->titulo		=$request->titulo;
    	$menu->esHoja 		=$request->esHoja;
    	$menu->activo 		=$request->activo;
    	$menu->save();
    	return redirect()->route('menu.index');
	}

	public function inactive($id){
		$menu = Menu::findOrFail($id);
		$menu->activo 		=$request->0;
		return redirect()->route('menu.index');
	}

	public function destroy($id){
		try{
			$menu = Menu::findOrFail($id);
			$menu->delete();
			return redirect()->route('menu.index');
		}
		catch(Exception $e){
			return "Fatal error - ".$e->getMessage();
		}
	}

}