<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Registro extends Model
{
   protected $table='registro';
    protected $primaryKey='id_registro';
    protected $fillable=[
    	'id_registro',
    	'id_empresa',
    	'id_contacto',
    	'id_carrera',
    	'id_convenio',
    	'id_pdf'
    ];
    public $timestamps=true;

    use SoftDeletes;

    protected $dates=['deleted_at'];
    public function empresa(){
        return $this->belongsTo('App\Empresa','id_empresa');
    }
    public function contacto(){
        return $this->belongsTo('App\Contacto','id_contacto');
    } 
    public function carrera(){
        return $this->belongsTo('App\Carrera','id_carrera');
    }
    public function convenio(){
        return $this->belongsTo('App\Convenio','id_convenio');
    }
    public function archPdf(){
        return $this->belongsTo('App\Pdf','id_pdf');
    }
}
