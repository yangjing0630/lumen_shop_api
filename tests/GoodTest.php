<?php
/**
 * Created by PhpStorm.
 * User: yang jing
 * Date: 2018/10/18
 * Time: 15:45
 */

class GoodTest extends TestCase
{

    public function testGoods()
    {
        $this->get('localhost:8000/goods/create')
            ->assertEquals("ok", "14", "yes yes yes");
//            ->assertTrue(true);
    }
}