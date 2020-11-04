<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;
use App\Empresa;
use App\Contacto;
use App\Carrera;
use App\Convenio;
use App\Registro;
use Carbon\Carbon;
use App\Pdf;

class registroconvenioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        return view('vistaSistema.registroconvenio');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $f=Carbon::now()->day;
        
        $parse=Carbon::parse($request->fecha_fin);
        $datos_registro=Empresa::create($request->all());
        $datos_contacto=Contacto::create($request->all());
        $datos_carrera=Carrera::create($request->all());
        $datos_convenio=Convenio::create([
            'n_convenio'=>$request->n_convenio,
            'tipo'=>$request->tipo,
            'fecha'=>$request->fecha,
            'ind'=>$request->ind,
            'fecha_fin'=>$parse
        ]);
        $pdf_n=$request->pdf->getClientOriginalName();
        $pdf=Pdf::create([
            'nom_pdf'=>$pdf_n,
            'ruta'=>$request->file('pdf')->storeAs('public/Arc_pdf',$pdf_n)
        ]);
        
       $datos_registro=Empresa::whereDay('created_at','=',$f)->get()->last();
       $datos_tc=Contacto::whereDay('created_at','=',$f)->get()->last();
       $datos_tca=Carrera::whereDay('created_at','=',$f)->get()->last();
       $datos_tcon=Convenio::whereDay('created_at','=',$f)->get()->last();
       $datos_t=Pdf::whereDay('created_at','=',$f)->get()->last();


       //return $datos_registro;
       $datos_R2=Registro::create([
        'id_empresa'=>$datos_registro->id_empresa,
        'id_contacto'=>$datos_tc->id_contacto,
        'id_carrera'=>$datos_tca->id_carrera,
        'id_convenio'=>$datos_tcon->id_convenio,
        'id_pdf'=>$datos_t->id_pdf

    ]);
return view('vistaSistema.registroconvenio');
    }
      
    
   /* public function show($id)
    {
        //
    }
*/
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        
        $variable==Empresa::find($id);
        return view('vistaSistema.editarconvenio', compact('variable'));
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
        //$f=Carbon::now()->day;
        


        $datos_registro=Empresa::find($id);
        $datos_registro->update($request->all());
        $datos_contacto=Contacto::find($id);
        $datos_contacto->update($request->all());
        $datos_carrera=Carrera::find($id);
        $datos_carrera->update($request->all());
        $datos_convenio=Convenio::find($id);
        $datos_convenio->update($request->all());
        $datos_pdf=Pdf::find($id);
        $pdf_n=$request->pdf->getClientOriginalName();

        
        if($request->hasFile('pdf')){
            if (Storage::exists($datos_pdf->nom_pdf))
        {
             // aquí la borro
             Storage::delete($datos_pdf->ruta);
        }
            $datos_pdf->nom_pdf=\Storage::putFile('public', $request->file('pdf'));
        }

        $datos_pdf->update([
            'nom_pdf'=>$pdf_n,
            'ruta'=>$request->file('pdf')->storeAs('public/Arc_pdf',$pdf_n)]);
    
        return redirect()->route ('ListaConvenio.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $datos_registro=Empresa::find($id);
        $datos_registro->delete();
        $datos_contacto=Contacto::find($id);
        $datos_contacto->delete();
        $datos_carrera=Carrera::find($id);
        $datos_carrera->delete();
        $datos_convenio=Convenio::find($id);
        $datos_convenio->delete();
        $datos_registro=Registro::find($id);
        $datos_registro->delete();
        $datos_pdf=Pdf::find($id);
        $datos_pdf->delete();
        
        


        return redirect()->route ('ListaConvenio.index');

        
    }
}
