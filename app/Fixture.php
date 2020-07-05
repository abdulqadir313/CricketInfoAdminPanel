<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Fixture extends Model
{
    protected $fillable = [
        'teamOne',
        'teamTwo',
        'venue',
        'fixture',
    ];
}
