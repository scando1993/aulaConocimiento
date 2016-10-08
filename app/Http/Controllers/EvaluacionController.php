<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use App\Evaluacion;

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

   

}