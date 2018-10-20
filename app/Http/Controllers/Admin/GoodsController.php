<?php

namespace App\Http\Controllers\Admin;

use App\Models\Goods;
use App\Http\Controllers\Controller;
use Faker\Generator as faker;
use Monolog\Logger;
use Monolog\Handler\StreamHandler;

class GoodsController extends Controller
{

    /**
     * 获取商品列表
     * */

    public function index()
    {
// create a log channel
        $log = new Logger('name');
        $log_filename = date('Y_m_d_H_i_s') . "_test.log";
        $log->pushHandler(new StreamHandler(__DIR__ . '/logs/' . $log_filename, Logger::WARNING));

// add records to the log
        $log->warning('Foo');
        $log->error('Bar');

//        echo "hello,world";

//        $data = Goods::all();
//        return response()->json($data);
//        dd($data);
//        $data = PocketGoods::query()->where('goods_id', 10464)->get();
//        echo "<pre>";
//        dd($data);
//        print_r($data);
    }

    /**
     * 添加商品列表
     * */
    public function create(Faker $faker)
    {
        $model = new Goods();

        $model->name = $faker->name;

        $model->save();

        return "ok";
    }
}
