<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class IngresoBebidasYOtros extends Model
{
    protected $table= 'IngresoBebidasYOtros';
    protected $primaryKey='IdIngresoBebidasYOtros';
    protected $fillable = [
        'iduser', 'descripcion',
        'cantidad', 'precio',
        'precio_total'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $guarded = [
    ];
}
