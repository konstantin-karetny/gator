<?php

namespace App\Services\Meme;

use App\Services\Meme\Srcs\Src as MemeSrcsSrc;
use App\Services\Meme\Srcs\NineGag as MemeSrcsNineGag;
use App\Services\Service;

class Cron extends Service
{
    public function add(array $items): bool
    {
        try {
            foreach ($items as $item) {
                $src   = $this->getSrc($item->src_alias);
                $model = $src->format($item);
                if ($src->filter($model)) {
                    $src->store($model);
                }
            }
        } catch (\Exception $e) {
            dd($e);
            // log
        }
        return true;
    }

    public function getItems(): array
    {
        try {
            //return array_slice(json_decode(file_get_contents('D:\Downloads\api.json'), false, 512, JSON_THROW_ON_ERROR)->items, 0, 10);
            return $this->api();
        } catch (Exception $e) {
            dd($e);
            // log
        }
    }

    public function getSrc(string $alias): MemeSrcsSrc
    {
        switch (strtolower(trim($alias))) {
            case 'ninegag':
                return new MemeSrcsNineGag();
        }
    }











    public function api() {
        //$url = 'https://agile-river-75797.herokuapp.com/crawl.json?spider_name=imgur&start_requests=true';
        $url = 'https://agile-river-75797.herokuapp.com/crawl.json?spider_name=ninegag&start_requests=true';
        $curl = curl_init($url);
        //curl_setopt($curl, CURLOPT_POST, true);
        //curl_setopt($curl, CURLOPT_POSTFIELDS, http_build_query([]));
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
        $res = curl_exec($curl);
        curl_close($curl);
        return json_decode($res, false, 512, JSON_THROW_ON_ERROR)->items;


        if ($res !== false) {
            $res = json_decode($res, true);
        }
        $reply = [];
        foreach ((array) $res['items'] as $item) {
            if ($item) {
                $reply[] = $item['raw'];
            }
        }
        return $reply;
    }
}
