<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BebidasYOtros extends Model
{
    protected $table= 'BebidasYOtros';
    protected $primaryKey='IdBebidasYOtros';
    protected $fillable = [
        'descripcion', 'precio',
        'cantidad', 'fecha' 
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $guarded = [
    ];
}
