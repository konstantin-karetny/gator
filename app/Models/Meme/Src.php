<?php

namespace App\Models\Meme;

use App\Models\Meme\Meme as MemeMemeModel;
use App\Models\Model;
use App\Models\User\User as UserUserModel;

class Src extends Model
{
    protected $guarded = [];

    public function memes()
    {
        return $this->hasMany(MemeMemeModel::class);
    }

    public function user()
    {
        return $this->belongsTo(UserUserModel::class);
    }
}
