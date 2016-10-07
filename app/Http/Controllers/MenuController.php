<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use App\Menu;


class MenuController extends Controller {

	public function index($nombre) { 
		$ev3 = Menu::where('menu.titulo','=',$nombre)
				->get();
        return view('ev3')->with('nombre',$ev3);
    } 

	// public function listar(){
	// 	$menuList = Menu::whereNull('id_padre')
	// 	->get();
 //     	return view('menu')->with('menuList', $menuList);
	// }

	public function listar2(){
		$menuList = Menu::whereNull('id_padre')
		->get();
     	return view('partials/sidebar')->with('menuList', $menuList);
	}
	
	public function create(){
		// Se carga el formualrio de creacion de Menu (app/views/menu/create.blade.php)
		return view::make('menu.create');
	}

	public function store(){
		// validate
        // Para validacion se utiliza http://laravel.com/docs/validation
        $rules = array(
            'id_padre'       => 'required|id_padre',
            'id_curso'       => 'required|id_curso',
            'titulo'	=> 'required',
            'esHoja'      => 'required|boolean',
            'activo' => 'required|boolean'
        );
        $validator = Validator::make(Input::all(), $rules);

	}	

	// public function show(){

	// }

	// public function edit($id){

	// }

	// public function update($id){

	// }

	// public function destroy($id){

	// }

}