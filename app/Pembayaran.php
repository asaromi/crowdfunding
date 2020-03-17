<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pembayaran extends Model
{
    protected $fillable = [
        'id_user', 'nominal', 'id_kampanye'
    ];

    function kampanye(){
        return $this->belongsTo('App\Kampanye', 'id_kampanye');
    }
}
