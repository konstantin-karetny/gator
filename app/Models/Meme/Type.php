<?php

namespace App\Models\Meme;

use App\Models\Meme\Meme as MemeMemeModel;
use App\Models\Model;

class Type extends Model
{
    public function memes()
    {
        return $this->hasMany(MemeMemeModel::class);
    }
}
