<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PocketGoods extends Model
{
    // 软删除和用户验证attempt
    public $table = 'm_pocket_goods';

    protected $casts = [
        'goods_id' => 'int', 'tag_id' => 'int', 'click_count' => 'int', 'brand_id' => 'int', 'goods_number' => 'int', 'goods_weight_unit' => 'int',
        'integral_price' => 'int', 'promote_start_date' => 'int', 'promote_end_date' => 'int', 'warn_number' => 'int', 'is_real' => 'int', 'is_on_sale' => 'int',
        'is_alone_sale' => 'int', 'is_shipping' => 'int', 'integral' => 'int', 'add_time' => 'int', 'sort_order' => 'int', 'is_show' => 'int',
        'is_delete' => 'int', 'is_best' => 'int', 'is_new' => 'int', 'is_hot' => 'int', 'is_promote' => 'int', 'is_hd' => 'int', 'is_hdbk' => 'int',
        'is_pocket' => 'int', 'bonus_type_id' => 'int', 'last_update' => 'int', 'goods_type' => 'int', 'give_integral' => 'int', 'rank_integral' => 'int',
        'suppliers_id' => 'int', 'is_check' => 'int', 'is_index' => 'int', 'is_special' => 'int', 'is_only_show' => 'int', 'keywords01' => 'int',
        'keywords02' => 'int', 'goods_leixing' => 'int', 'optional_num' => 'int', 'salesnum' => 'int', 'salesnum_pay' => 'int', 'isoktz' => 'int',
        'kcupdatetime' => 'int', 'imgcanfg' => 'int', 'is_share' => 'int', 'is_fenxiao' => 'int', 'limitations' => 'int', 'yh' => 'int',
        'hdid' => 'int', 'is_hide' => 'int', 'buy_quick' => 'int', 'start_time' => 'int', 'end_time' => 'int', 'person_canbuynum' => 'int',
        'buy_skip_goods_id' => 'int', 'hide_list' => 'int', 'time' => 'int', 'factorySend' => 'int', 'highMaterial' => 'int', 'NewCustomer' => 'int',
        'is_update' => 'int', 'is_xk_shipping' => 'int', 'is_activity' => 'int', 'is_recommend' => 'int', 'is_range' => 'int', 'shop_group' => 'int',
        'goods_type2' => 'int', 'goods_lock' => 'int', 'product_show_range' => 'int', 'is_haiwai' => 'int'
    ];

    //主键
    protected $primaryKey = 'goods_id';

    // 查询用户的时候，不暴露密码
    protected $hidden = [];

}
