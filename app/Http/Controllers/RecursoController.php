<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use App\Recurso;
use App\Taller;

class RecursoController extends Controller
{

   
   
    
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'descripcion' => 'required',
        ]);
        

//subir archivos

        //guardar archivo no olvidar q form debe ser multipart
        $file = $request->file('file');
       
        if ($file)
            {
                 $nombreobj = $file->getClientOriginalName();
        //configurar ruta local en config-->filisystem
        \Storage::disk('local')->put($nombreobj, \File::get($file));

        $request['archivo']=$nombreobj;

                $extension=substr( $nombreobj , -4);
                $request['extension']=$extension;
                $narchivo=$nombreobj;
                $narchivo=substr($narchivo, 0,strlen($narchivo)-4);
                $request['nombre_archivo']=$narchivo;
            }

        Recurso::create($request->all());
        return redirect()->route('taller.show',[$request->taller_id])
                        ->with('success','Recurso created successfully');

                        //<a class="btn btn-info" href="{{ route('taller.show',$item->id) }}">
    }

   
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     
    public function edit($id)
    {
        $item = Taller::find($id);
        return view('Taller.edit',compact('item'));
    }
*/
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     
    public function update(Request $request, $id)
    {
         $this->validate($request, [
            'titulo' => 'required',
        ]);

        Item::find($id)->update($request->all());
        return redirect()->route('taller.index')
                        ->with('success','Item updated successfully');
    }
*/
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
*/   
    public function destroy($id)
    {
       $t=Recurso::find($id)->taller_id;
        $filename= Recurso::find($id)->archivo;
        Storage::delete($filename);
        Recurso::find($id)->delete();
        return redirect()->route('taller.show', $t)
                        ->with('success','Taller eliminado correctamente');
    }


}