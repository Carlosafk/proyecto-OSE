<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Registro;
use App\Convenio;
use Carbon\Carbon;
use App\Empresa;
use Illuminate\Support\Collection;
class vistahomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $cont=User::all()->count(); 
        $cont2=Registro::all()->count(); 
        $cont3=Empresa::all()->count(); 

        $d = Convenio::all();
        $f=Carbon::now();
        
        $fecha = array();

        foreach ($d as $key) {
            $parse=Carbon::parse($key->fecha_fin);
            $parse=$parse->subMonth(4);

            if ($f > $parse) {
                $fecha[] =[$key->n_convenio=>$parse,] ;               
            }
        }
        //return $fecha;
         return view ('vistaSistema.vistaHome',compact('cont','cont2','cont3','d','fecha','f'));

       
    }
    public function cvnTerminar(){

        $fechaAct=Carbon::now();

        
        $d = Convenio::all();
        
       $cvnTerminar = array();

       foreach ($d as $key) {
            $parse=Carbon::parse($key->fecha_fin);
            $parse=$parse->subMonth(4);

            if ($fechaAct > $parse) {
                $cvnTerminar []=Registro::where('id_registro',$key->id_convenio)->get();
               
            }

        }

        $collection = collect($cvnTerminar)->all();
        
     // return dd($collection);
        
       return view('vistaSistema.conveniosporterminar',compact('collection')) ;  
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
        //
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
