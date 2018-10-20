<?php

use Illuminate\Database\Seeder;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $time = \Carbon\Carbon::now();
        $roles = [
            [
                'name' => '系统管理员',
                'created_at' => $time,
                'updated_at' => $time,
            ],
            [
                'name' => '商品管理员',
                'created_at' => $time,
                'updated_at' => $time,
            ],
//            [
//                'name' => '用户管理员',
//                'created_at' => $time,
//                'updated_at' => $time,
//            ],
            [
                'name' => '广告管理员',
                'created_at' => $time,
                'updated_at' => $time,
            ],
        ];

        \Illuminate\Support\Facades\DB::table('roles')->insert($roles);
    }
}