<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Endereco extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $dates = ['deleted_at'];

    public function estado(){
        return $this->belongsTo('App\Models\Estado');
    }

    public function pessoas(){
        return $this->hasMany('App\Models\Pessoa');
    }
}
