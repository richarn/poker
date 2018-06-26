<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CierreSemana extends Model
{
    protected $table= 'Cierre_Semana';
    protected $primaryKey='IdCierre';
    public $timestamps = false;
    protected $fillable = [
        'fecha', 'descripcion', 
        'total', 'IdTotalIngreso'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $guarded = [
    ];
}
