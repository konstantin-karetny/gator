<?php

namespace App\Services\Combines;

use App\Models\Post as PostModel;
use App\Services\Combines\Combine;
use App\Services\HarvestItem;
use Exception;
use Validator;

class NineGag extends Combine
{
    public function detectType(HarvestItem $item)
    {
        return (object) ['id' => 0];

        switch (strtolower(trim($item->type))) {
            case 'animated':
                return 'video';
            case 'article':
                return 'text';
            case 'photo':
                return 'img';
        };
        throw new Exception('Filed to detect type');
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
        $validated             = (object) $this->validate((array) $raw);
        $res->comments_count   = (int) $validated->commentsCount;
        $res->created_at       = (int) $validated->creationTs;
        $res->down_votes_count = (int) $validated->downVoteCount;
        $res->name             = html_entity_decode(htmlspecialchars_decode(trim((string) $validated->title), ENT_QUOTES));
        $res->original_id      = $validated->id;
        $res->raw              = $raw;
        //$res->src_id           = ;
        $res->type             = $validated->type;
        $res->up_votes_count   = (int) $validated->upVoteCount;
        $res->type_id          = $this->detectType($res)->id;
        return $res;
    }

    public function validate(array $data): array
    {
        $validator = Validator::make(
            $data,
            [
                'commentsCount'    => 'required|integer',
                'creationTs'       => 'required|integer',
                'downVoteCount'    => 'required|integer',
                'id'               => 'required|alpha_num',
                'title'            => 'required|string|min:1|max:255',
                'type'             => 'required|alpha',
                'upVoteCount'      => 'required|integer'
            ]
        );
        if ($validator->errors()->all()) {
            throw new Exception('Filed to format item');
        }
        return $validator->validated();
    }
}