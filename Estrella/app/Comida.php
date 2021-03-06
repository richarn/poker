<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comida extends Model
{
    protected $table= 'Comida';
    protected $primaryKey='IdComida';
    public $timestamps = false;
    protected $fillable = [
        'descripcion', 'cantidad',
        'precio', 'fecha',
        'IdIngresoComida' 
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $guarded = [
    ];
}
