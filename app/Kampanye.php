<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kampanye extends Model
{
    //
    protected $fillable = [
        'judul', 'organisasi', 'target','deskripsi','jumlah','lokasi','tenggat','status','id_user'
    ];

}
