<?php
namespace App;

use Illuminate\Database\Eloquent\Model;

class Recurso extends Model
{
	public $table = "recurso";
    public $fillable = ['nombre_archivo','descripcion','ruta','link','archivo', 'extension'];

    public function taller()
    {
        return $this->belongsTo('App\Taller');
    }

}