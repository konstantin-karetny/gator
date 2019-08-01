<?php

namespace App\Models\Meme;

use App\Models\Model;
use App\Models\User\User as UserUserModel;

class Src extends Model
{
    protected $guarded = [];

    public function user()
    {
        return $this->belongsTo(UserUserModel::class);
    }
}
