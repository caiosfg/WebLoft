<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Imoveis extends Model
{
    protected $casts =[
        'items' => 'array'
    ];

    public function user(){
        return $this->belongsTo('App\Models\User');
    }
}
