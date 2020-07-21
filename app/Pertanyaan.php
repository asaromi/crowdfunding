<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pertanyaan extends Model
{
    protected $fillable = [
        'id_user', 'pertanyaan','email'
    ];
}
