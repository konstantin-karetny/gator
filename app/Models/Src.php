<?php

namespace App\Models;

class Src extends Model
{
    protected $fillable = [
        'alias',
        'filter_min_votes',
        'name',
        'url'
    ];
}
