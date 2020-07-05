<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Point extends Model
{
    protected $fillable = [
        'teamPoints',
        'teamId',
        'fixtureId',
    ];
}
