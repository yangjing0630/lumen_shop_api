<?php

use Illuminate\Database\Seeder;

class PermissionsTableSeeder extends Seeder
{

    public function run()
    {
        // TODO: Implement run() method.
        $time = \Carbon\Carbon::now();
        $permissions = [
            [
                'name' => 'admins_insert',
                'created_at' => $time,
                'updated_at' => $time,
            ],
            [
                'name' => 'admins_edit',
                'created_at' => $time,
                'updated_at' => $time,
            ],
            [
                'name' => 'admins_delete',
                'created_at' => $time,
                'updated_at' => $time,
            ],
            [
                'name' => 'admins_update',
                'created_at' => $time,
                'updated_at' => $time,
            ],
            [
                'name' => 'goods_insert',
                'created_at' => $time,
                'updated_at' => $time,
            ],
            [
                'name' => 'goods_edit',
                'created_at' => $time,
                'updated_at' => $time,
            ],
            [
                'name' => 'goods_update',
                'created_at' => $time,
                'updated_at' => $time,
            ],
            [
                'name' => 'goods_delete',
                'created_at' => $time,
                'updated_at' => $time,
            ],
            [
                'name' => 'ads_insert',
                'created_at' => $time,
                'updated_at' => $time,
            ],
            [
                'name' => 'ads_edit',
                'created_at' => $time,
                'updated_at' => $time,
            ],
            [
                'name' => 'admins_update',
                'created_at' => $time,
                'updated_at' => $time,
            ],
            [
                'name' => 'admins_delete',
                'created_at' => $time,
                'updated_at' => $time,
            ],
        ];
        \Illuminate\Support\Facades\DB::table('permissions')->insert($permissions);
    }

}