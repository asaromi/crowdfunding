<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pertanyaan extends Model
{
    protected $fillable = [
        'id_user', 'pertanyaan','jawaban'
    ];

    /** Relasi user dengan pertanyaan Many to One*/
    function user(){
        return $this->belongsTo('App\User', 'id_user');
    }
}
