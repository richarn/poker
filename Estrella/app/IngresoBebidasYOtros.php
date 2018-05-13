<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class IngresoBebidasYOtros extends Model
{
    protected $table= 'IngresoBebidasYOtros';
    protected $primaryKey='IdIngresoBebidasYOtros';
    public $timestamps = false;
    protected $fillable = [
        'descripcion','cantidad',
         'precio', 'precio_total',
         'fecha'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $guarded = [
    ];
}
