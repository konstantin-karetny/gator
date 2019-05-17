<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class Harvester extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {


        $res->comments_count   = (int) $raw->commentsCount;
        $res->created_at       = (int) $raw->creationTs;
        $res->down_votes_count = (int) $raw->downVoteCount;
        $res->name             = htmlspecialchars_decode(trim((string) $raw->title, '" \t\n\r\0\x0B".'));
        $res->raw              = $raw;
        $res->raw_id           = $raw->id;
        $res->up_votes_count   = (int) $raw->upVoteCount;
        $res->type             = $this->detectType($res);


        return [
            'comments_count'   => '',
            'created_at'       => '',
            'down_votes_count' => '',
            'name'             => '',
            'raw'              => '',
            'raw_id'           => '',
            'up_votes_count'   => '',
            'type'             => ''
        ];
    }
}
