<?php

namespace App\Services\Combines;

use App\Models\Post as PostModel;
use App\Services\Combines\Combine;
use App\Services\HarvestItem;

class NineGag extends Combine
{
    public function detectType(HarvestItem $item): string
    {
        switch (strtolower(trim($item->raw->type))) {
            case 'animated':
                return 'video';
            case 'photo':
                return 'img';
        };
    }

    public function filter(HarvestItem $item): bool
    {
        return
            $item->up_votes_count - $item->down_votes_count
            >
            config('harvester.9gag.filter_min_votes');
    }

    public function format($raw): HarvestItem
    {
       $res                   = new HarvestItem();
       $res->comments_count   = (int) $raw->commentsCount;
       $res->created_at       = (int) $raw->creationTs;
       $res->down_votes_count = (int) $raw->downVoteCount;
       $res->name             = htmlspecialchars_decode(trim((string) $raw->title, '" \t\n\r\0\x0B".'));
       $res->raw              = $raw;
       $res->raw_id           = $raw->id;
       $res->up_votes_count   = (int) $raw->upVoteCount;
       $res->type             = $this->detectType($res);
       return $res;
    }

    public function save(HarvestItem $item): PostModel
    {

    }
}