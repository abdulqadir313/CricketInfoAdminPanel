<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Player extends Model
{
    protected $fillable = [
        'firstName',
        'lastName',
        'photo',
        'country',
        'jersyNumber',
        'matches',
        'run',
        'highestScore',
        'fifties',
        'hundreds',
        'average',
        'strikeRate',
        'teamId',
    ];
}
