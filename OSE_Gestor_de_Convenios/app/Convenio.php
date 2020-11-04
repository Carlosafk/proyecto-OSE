<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Convenio extends Model
{
     protected $table='convenio';
    protected $primaryKey='id_convenio';
    protected $fillable=[
    	'id_convenio',
        'n_convenio',
    	'tipo',
    	'fecha',
    	'ind',
    	'fecha_fin'
    ];
    public $timestamps=true;

    use SoftDeletes;

    protected $dates=['deleted_at'];
}
