<?php
namespace App;

use Illuminate\Database\Eloquent\Model;

class Menu extends Model 
{
	public $table = "menu";
	public $fillable= ['id_padre', 'titulo', 'esHoja', 'activo'];
	public $timestamps = false;
}