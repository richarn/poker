<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CostoProducto extends Model
{
    protected $table= 'CostoProductos';
    protected $primaryKey='IdCostoProductos';
    protected $fillable = [
        'monto', 'iduser', 
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
