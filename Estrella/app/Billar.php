<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Billar extends Model
{
    protected $table= 'Billar';
    protected $primaryKey='IdBillar';
    public $timestamps = false;
    protected $fillable = [
        'descripcion', 'precio'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $guarded = [
    ];
}
