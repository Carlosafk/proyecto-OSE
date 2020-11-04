<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class Empresa extends Model
{

    protected $table='empresa';
    protected $primaryKey='id_empresa';
    protected $fillable=[
    	'id_empresa',
    	'n_empresa',
    	'ubic',
    	'dir',
    	'tel',
    	'corr'
    ];
    public $timestamps=true;

    use SoftDeletes;

    protected $dates=['deleted_at'];


}
