<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use App\Menu;


class MenuController extends Controller {

	public function index(){
		$menuList = Menu::whereNull('id_padre')
		->get();
     	return view('menu')->with('menuList', $menuList);
	}

	// public function listar(){
	// 	$menuList = Menu::where('menu.id','==',null);
 //     	return view('menu',compact('menuList'))
 //     	->with('i', $menuList);
	// }

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