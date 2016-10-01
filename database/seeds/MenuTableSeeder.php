<?php
use Illuminate\Database\Seeder;
use App\Menu;

class MenuTableSeeder extends Seeder {

    public function run()
    {
        DB::table('menu')->delete();

        Menu::create(array(
    	'id_padre'=>null,
        'titulo'=>'Introducción EV3',
        'esHoja'=>'0',
        'activo'=>'1'
    ));
}