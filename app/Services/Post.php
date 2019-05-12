<?php

namespace App\Services;

use App\Models\Post as PostModel;

class Post
{
   private $model;

   public function __construct(PostModel $model)
   {
       $this->model = $model;
   }
}