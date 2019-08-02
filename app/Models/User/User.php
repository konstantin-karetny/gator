<?php

namespace App\Models\User;

use App\Models\Meme\Meme as MemeModel;
use App\Models\Meme\Src as MemeSrcModel;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    protected
        $casts = [
            'email_verified_at' => 'datetime',
        ],
        $fillable = [
            'name',
            'email',
            'password',
        ],
        $hidden = [
            'password',
            'remember_token',
        ];

    public function memes()
    {
        return $this->hasMany(MemeModel::class);
    }

    public function memeSrcs()
    {
        return $this->hasMany(MemeSrcModel::class);
    }
}
