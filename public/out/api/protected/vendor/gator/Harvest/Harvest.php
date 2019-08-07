<?php

namespace Gator\Harvest;

class Harvest
{
    protected
        $harvester = null,
        $params    = [];

    public function __construct()
    {
        $this->params = $this->defineParams();
    }

    public function exec(): string
    {
        die(var_dump($this->getParams()));
        return 'zz';
    }

    protected function defineParams(): array
    {
        return [
            'quantity'  => (int)    ($_REQUEST['quantity'] ?: 20),
            'src_alias' => (string) $_REQUEST['src_alias']
        ];
    }

    protected function getParam(string $key, $default = null)
    {
        $res = $this->getParams();
        foreach (explode('[', str_replace(']', '', $key)) as $k) {
            if (!isset($res[$k])) {
                return $default;
            }
            $res = $res[$k];
        }
        return $res;
    }

    protected function getParams(): array
    {
        return $this->params;
    }
}










return;


$items = [];
for ($i = 0; $i <= 4; $i++) {
    $curl = curl_init(
        !$i
        ? 'https://9gag.com/v1/group-posts/group/default/type/hot'
        : 'https://9gag.com/v1/group-posts/group/default/type/hot?after=' . end($items)['id'] . '&c=10'
    );
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
    $res = curl_exec($curl);
    if ($res !== false) {
        $res = json_decode($res, true);
    }
    curl_close($curl);
    $items = array_merge($items, $res['data']['posts']);
}

die(var_dump($items));

foreach ($items as $i => $item) {
    $item        = (object) $item;
    $item->image = isset($item->images['image460']['url'])   ? $item->images['image460']['url']   : '';
    $item->name  = trim($item->title, '.');
    $item->video = isset($item->images['image460sv']['url']) ? $item->images['image460sv']['url'] : '';
    $items[$i]   = $item;
}
return
    view(
        'post.items',
        [
            //'items' => $this->model->all()
            'items' => $items
        ]
    );
