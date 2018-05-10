<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pozo extends Model
{
    protected $table= 'Pozo';
    protected $primaryKey='IdPozo';
    public $timestamps = false;
    protected $fillable = [
        'monto', 'propina',
        'fecha', 'total_pozo'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $guarded = [
    ];
}
