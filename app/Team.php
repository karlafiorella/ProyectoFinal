<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
     protected $fillable = [
        'name', 'position', 'file' , 'twitter', 'facebook', 'linkin', 'google'
    ];
}
