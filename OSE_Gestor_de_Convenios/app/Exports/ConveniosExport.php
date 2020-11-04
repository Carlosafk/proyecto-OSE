<?php

namespace App\Exports;

use App\Convenios;
use Maatwebsite\Excel\Concerns\FromView;
use illuminate\contracts\View\View;
use Maatwebsite\Excel\Facades\Excel;
use App\Empresa;
use App\Contacto;
use Appp\Convenio;
use App\Carrera;
use App\Registro;
use App\Pdf;

class ConveniosExport implements FromView
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Convenios::all();
    }

    public function view():view{
    	return view('vistaSistema.reporteExcel',[
    		'Registro'=>Registro::all()
            /*'Convenio'=>Convenio::all(),
            'Carrera'=>Carrera::all(),
            'Contacto'=>Contacto::all(),
            'Empresa'=>Empresa::all(),
            'Pdf'=>Pdf::all()*/


    	]);

	}

}

