<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Registro;
use App\Exports\ConveniosExport;
use Maatwebsite\Excel\Facades\Excel;
use App\Convenio;
class listaconveniosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $variable=Registro::all();
        return view('vistaSistema.vistalistaconvenios',compact('variable'));
        //return $variable;
    }
    public function Exportar(){
         return Excel::download(new ConveniosExport,'Reportes_de_Convenios.xlsx');
    }
    public function buscar(Request $request){
        if ($request->busc =="") {
            $variable=Registro::all();
        return view('vistaSistema.buscar',compact('variable'));
        }else{
        $bus=Convenio::where("n_convenio","like",$request->busc."%")->get()->pluck('id_convenio'); 
        $variable=Registro::where('id_convenio',$bus)->get();
       
       return view('vistaSistema.buscar',compact('variable'));
        }//return $variable;

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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('vistaSistema.editarconvenio');
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}