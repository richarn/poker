<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TotalIngreso extends Model
{
    protected $table= 'TotalIngreso';
    protected $primaryKey='IdTotalIngreso';
    public $timestamps = false;
    protected $fillable = [
        'fecha', 'IdIngresoBebidasYOtros', 
        'IdIngresoComida', 'IdIngresoBillar', 
        'IdPozo', 'total_dia'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $guarded = [
    ];
}
