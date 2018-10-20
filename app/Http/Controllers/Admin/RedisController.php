<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Support\Facades\Redis;
use App\Http\Controllers\Controller;

class RedisController extends Controller
{

    public function create()
    {
        $create = Redis::SET('name', 'candice');
        return $create;
    }

}
