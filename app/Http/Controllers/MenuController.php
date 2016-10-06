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

	public function listar(){
		$menuList = Menu::whereNull('id_padre')
		->get();
     	return view('menu')->with('menuList', $menuList);
	}
	// public function create(){

	// }

	// public function store(){

	// }

	// public function show(){

	// }

	// public function edit($id){

	// }

	// public function update($id){

	// }

	// public function destroy($id){

	// }

}