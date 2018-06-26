<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Semana extends Model
{
    protected $table= 'semana';
    protected $primaryKey='IdSemana';
    public $timestamps = false;
    protected $fillable = [
        'fecha', 'total', 
        
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $guarded = [
    ];
}
