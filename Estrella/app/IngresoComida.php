<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class IngresoComida extends Model
{
    protected $table= 'IngresoComida';
    protected $primaryKey='IdIngresoComida';
    protected $fillable = [
        'iduser', 'descripcion',
        'precio', 'cantidad',
        'precio_total_comida'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $guarded = [
    ];
}
