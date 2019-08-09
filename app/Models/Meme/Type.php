<?php

namespace App\Models\Meme;

use App\Models\Model;
use App\Models\Meme\Meme as MemeMemeModel;

class Type extends Model
{
    public function memes()
    {
        return $this->hasMany(MemeMemeModel::class);
    }
}
