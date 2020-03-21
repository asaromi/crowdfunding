<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pertanyaan extends Model
{
    protected $fillable = [
        'id_user', 'pertanyaan','jawaban'
    ];

    function user(){
        return $this->belongsTo('App\User', 'id_user');
    }
}
