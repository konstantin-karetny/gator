<?php

namespace App\Http\Controllers;

use App\Services\Harvester as HarvesterService;
use Illuminate\Http\Request;

class Harvester extends Controller
{
   public function exec(HarvesterService $service)
   {
       die(var_dump($service->exec($this->getRaw())));
       $service->exec($this->getRaw());
   }

   protected function getRaw(): string
   {
       return $this->api();

   }
































   public function api()
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
   }
}
