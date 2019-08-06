<?php

die(var_dump('das'));

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