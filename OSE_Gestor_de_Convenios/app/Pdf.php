<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Pdf extends Model
{
    protected $table='pdf';
    protected $primaryKey='id_pdf';
    protected $fillable=[
    	'id_pdf',
    	'nom_pdf',
    	'ruta'
    ];
    public $timestamps=true;

    use SoftDeletes;

    protected $dates=['deleted_at'];

}
