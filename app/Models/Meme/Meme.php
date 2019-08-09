<?php

namespace App\Models\Meme;

use App\Models\Meme\Like as MemeLikeModel;
use App\Models\Meme\Type as MemeTypeModel;
use App\Models\Model;
use App\Models\User\User as UserUserModel;
use App\Services\Meme\Files;

class Meme extends Model
{
    protected $guarded = [];

    public function getVideoPath()
    {
        $files = (new Files($this));
        die(var_dump(

            $files->getStorage()->getDriver(),
                asset('public/1.jpg')

        ));
        die(var_dump(
                        asset(
                'videos/'.$files->buildName($this->body)

                                ) ,


            $files->getStorage()->path(
                'videos/'.$files->buildName($this->body)
            )


        ));
        die(var_dump($this->body));
        return
            !$this->added
                ? $this->body
                : $this->body;
    }

    public function likes()
    {
        return $this->hasMany(MemeLikeModel::class);
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
