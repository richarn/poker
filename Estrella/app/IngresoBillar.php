<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class IngresoBillar extends Model
{
    protected $table= 'IngresoBillar';
    protected $primaryKey='IdIngresoBillar';
    protected $fillable = [
        'descripcion', 'precio', 
        'cantidad_juego', 'cantidad_combo', 
        'iduser', 'totalBillar'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $guarded = [
    ];
}
