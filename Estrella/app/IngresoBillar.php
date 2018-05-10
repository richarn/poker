<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class IngresoBillar extends Model
{
    protected $table= 'IngresoBillar';
    protected $primaryKey='IdIngresoBillar';
    public $timestamps = false;
    protected $fillable = [
        'descripcion', 'precio', 
        'fecha', 'totalBillar'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $guarded = [
    ];
}
