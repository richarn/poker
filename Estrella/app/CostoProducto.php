<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CostoProducto extends Model
{
    protected $table= 'CostoProductos';
    protected $primaryKey='IdCostoProductos';
    public $timestamps = false;
    protected $fillable = [
        'precio', 'fecha',
        'descripcion', 'cantidad' 
     
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $guarded = [
    ];
}
