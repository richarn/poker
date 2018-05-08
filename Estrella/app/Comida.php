<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comida extends Model
{
    protected $table= 'Comida';
    protected $primaryKey='IdComida';
    protected $fillable = [
        'descripcion', 'cantidad',
        'precio', 'fecha' 
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $guarded = [
    ];
}
