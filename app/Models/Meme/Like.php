<?php

namespace App\Models\Meme;

use App\Models\Meme\Meme as MemeMemeModel;
use App\Models\Model;
use App\Models\User\User as UserUserModel;

class Like extends Model
{
    protected $table = 'memes_likes';

    public function meme()
    {
        return $this->belongsTo(MemeMemeModel::class);
    }

    public function user()
    {
        return $this->belongsTo(UserUserModel::class);
    }
}
