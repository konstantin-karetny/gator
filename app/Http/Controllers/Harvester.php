<?php

namespace App\Http\Controllers;

use App\Services\Harvester as HarvesterService;
use Illuminate\Http\Request;

class Harvester extends Controller
{
   public function exec(HarvesterService $service)
   {
       $service->exec($this->getRaw());
   }

   protected function getRaw(): string
   {
       return $this->api();

   }
































   /*public function api()
   {
        $res = [];
        for ($i = 0; $i <= 4; $i++) {
            $curl = curl_init(
                !$i
                ? 'https://9gag.com/v1/group-posts/group/default/type/hot'
                : 'https://9gag.com/v1/group-posts/group/default/type/hot?after=' . end($res)['id'] . '&c=10'
            );
            curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
            $exec = curl_exec($curl);
            if ($exec === false) {
                throw new Exception('curl_exec failed');
            }
            curl_close($curl);
            $res = array_merge($res, json_decode($exec, true)['data']['posts']);
        }
        foreach ($res as $i => $item) {
            $item['src'] = '9gag';
            $res[$i]     = $item;
        }
        return json_encode($res);
   }*/

   public function api() {
        //$url = 'https://agile-river-75797.herokuapp.com/crawl.json?spider_name=imgur&start_requests=true';
        $url = 'https://agile-river-75797.herokuapp.com/crawl.json?spider_name=ninegag&start_requests=true';
        $curl = curl_init($url);
        //curl_setopt($curl, CURLOPT_POST, true);
        //curl_setopt($curl, CURLOPT_POSTFIELDS, http_build_query([]));
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
        $res = curl_exec($curl);
        curl_close($curl);
        if ($res !== false) {
            $res = json_decode($res, true);
        }
        $reply = [];
        foreach ((array) $res['items'] as $item) {
            if ($item) {
                $reply[] = $item['raw'];
            }
        }
        return json_encode($reply);
   }
}
