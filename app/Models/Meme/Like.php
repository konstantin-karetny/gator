<?php

namespace App\Models\Meme;

use App\Models\Meme\Meme as MemeMemeModel;
use App\Models\Model;
use App\Models\User\User as UserUserModel;

class Like extends Model
{
    public
        $timestamps = false;

    protected
        $guarded    = [],
        $table      = 'memes_likes';

    public static function boot()
    {
        parent::boot();
        static::creating(function ($model) {
            $model->created_at = $model->freshTimestamp();
        });
    }

    public function meme()
    {
        return $this->belongsTo(MemeMemeModel::class);
    }

    public function user()
    {
        return $this->belongsTo(UserUserModel::class);
    }
}
