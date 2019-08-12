<?php

namespace App\Models\Meme;

use App\Models\Meme\Meme as MemeMemeModel;
use App\Models\Model;
use App\Models\User\User as UserUserModel;
use Illuminate\Support\Facades\Storage;

class Src extends Model
{
    protected $guarded = [];

    public function getLogoFullPathAttribute()
    {
        return Storage::disk('public')->path($this->logo_path);
    }

    public function getLogoPathAttribute()
    {
        return
            config('app.meme.src.dirs.logo') . '/' .
            $this->getKey() . '.' . config('app.meme.src.logo_extension');
    }

    public function getLogoUrlAttribute()
    {
        return asset('storage/' . $this->logo_path);
    }

    public function memes()
    {
        return $this->hasMany(MemeMemeModel::class);
    }

    public function user()
    {
        return $this->belongsTo(UserUserModel::class);
    }
}
