<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class Contacto extends Model
{
    
 protected $table='contacto';
    protected $primaryKey='id_contacto';
    protected $fillable=[
    	'id_contacto',
    	'n_cont',
    	'puesto',
    	'tel_cont',
    	'cel_cont',
    	'corr_cont'
    ];
    public $timestamps=true;

    use SoftDeletes;

    protected $dates=['deleted_at'];
}
