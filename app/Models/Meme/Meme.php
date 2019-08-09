<?php

namespace App\Models\Meme;

use App\Models\Meme\Like as MemeLikeModel;
use App\Models\Meme\Src as MemeSrcModel;
use App\Models\Meme\Type as MemeTypeModel;
use App\Models\Model;
use App\Models\User\User as UserUserModel;

class Meme extends Model
{
    protected $guarded = [];

    public function likes()
    {
        return $this->hasMany(MemeLikeModel::class);
    }

    public function src()
    {
        return $this->belongsTo(MemeSrcModel::class);
    }

    public function type()
    {
        return $this->belongsTo(MemeTypeModel::class);
    }

    public function user()
    {
        return $this->belongsTo(UserUserModel::class);
    }
}
