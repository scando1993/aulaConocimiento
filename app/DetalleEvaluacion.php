<?php
namespace App;

use Illuminate\Database\Eloquent\Model;

class DetalleEvaluacion extends Model
{
	public $table = "detalle_evaluacion";
    public $fillable = ['respuesta_id', 'pregunta_id', 'evaluacionusers_id'];
    public $timestamps = false;

    
     public function inEvaluser()
    {
        return $this->belongsTo('App\EvaluacionUser');
    }

    public function inPregunta()
    {
        return $this->belongsTo('App\Pregunta');
    }

     public function inRespuesta()
    {
        return $this->belongsTo('App\Respuetsa');
    }

}