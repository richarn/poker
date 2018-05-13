<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class IngresoComida extends Model
{
    protected $table= 'IngresoComida';
    protected $primaryKey='IdIngresoComida';
    public $timestamps = false;
    protected $fillable = [
        'descripcion','precio',
         'cantidad', 'precio_total_comida',
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
