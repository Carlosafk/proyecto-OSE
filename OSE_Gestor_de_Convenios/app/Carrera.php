<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class Carrera extends Model
{
    protected $table='carrera';
    protected $primaryKey='id_carrera';
    protected $fillable=[
    	'id_carrera',
    	'carrera',
    	
    ];
    public $timestamps=true;

    use SoftDeletes;

    protected $dates=['deleted_at'];
}
