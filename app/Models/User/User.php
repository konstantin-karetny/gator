<?php

namespace App\Models\User;

use App\Models\Meme\Src as MemeSrcModel;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    protected $fillable = [
        'name', 'email', 'password',
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function memeSrcs()
    {
        return $this->hasMany(MemeSrcModel::class);
    }

    public function posts()
    {
        return $this->hasMany(Post::class);
    }
}
