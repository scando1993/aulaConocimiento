<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use App\Evaluacion;
use App\Taller;

use Auth;

class EvaluacionController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $items = Evaluacion::orderBy('id','ASC')->paginate(5);
        return view('evaluacion.index',compact('items'))
            ->with('i', ($request->input('page', 1) - 1) * 5);
    }

     /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'nombre' => 'required',
        ]);

        Evaluacion::create($request->all());
        return redirect()->route('evaluacion.index')
                        ->with('success','Item created successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
    */   
    public function destroy($id)
    {
        Evaluacion::find($id)->delete();
        return redirect()->route('evaluacion.index')
                        ->with('success','Evaluacion eliminada correctamente');
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
    */
    public function show($id)
    {
       
    }

     /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
         $this->validate($request, [
            'nombre' => 'required',
        ]);

        Evaluacion::find($id)->update($request->all());
        return redirect()->route('evaluacion.index')
                        ->with('success','Evaluacion actualizada correctamente');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
     public function realizar($id)
    {   
        $user=Auth::user()->id;

        $carbon = new \Carbon\Carbon();
        $date = $carbon->now();
        $cal=0;
        $evaluacion=Taller::find($id)->evaluaciones;

        printf("haciendo evaluacion(id eval):$evaluacion->id de(id user):$user  el dia(date):$date su calificacion es(int):$cal ");
    
        $aleatorio=$evaluacion->preguntas;
        //return view('evaluaciones.realizar_evaluacion',compact('aleatorio','id'));

    }
   

}