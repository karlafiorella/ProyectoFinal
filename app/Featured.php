<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Featured extends Model
{
    protected $fillable = [
        'imagen', 'title', 'description'
    ];
}
