<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Pessoa extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $dates = ['deleted_at'];
    protected $guarded = [];

    public function endereco(){
        return $this->belongsTo('App\Models\Endereco');
    }

    public function telefones(){
        return $this->hasMany('App\Models\Telefone');
    }
}
