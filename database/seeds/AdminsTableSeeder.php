<?php

use Illuminate\Database\Seeder;

class AdminsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $time = \Carbon\Carbon::now();
        $admins = [
            [
                'name' => 'candice',
                'gender' => 'female',
                'email' => '591813762@qq.com',
                'password' => bcrypt('secret'),
                'created_at' => $time,
                'updated_at' => $time
            ],
            [
                'name' => 'Arron',
                'gender' => 'male',
                'email' => 'arron@qq.com',
                'password' => bcrypt('secret'),
                'create_at' => $time,
                'updated_at' => $time
            ],
            [
                'name' => 'leaf',
                'gender' => 'male',
                'email' => 'leaf@qq.com',
                'password' => bcrypt('secret'),
                'created_at' => $time,
                'updated_at' => $time
            ]
        ];
        \Illuminate\Support\Facades\DB::table('admins')->insert($admins);
    }
}
