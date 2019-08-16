<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\UserResource;
use App\Models\User\User as UserUserModel;

class User extends Controller
{
    public function index()
    {
        return UserResource::collection(UserUserModel::paginate(10));
    }
}
