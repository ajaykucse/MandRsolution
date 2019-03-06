<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MenuItem extends Model
{
    protected $table = 'tbl_menu_item';

    protected $fillable = [
        'menu_item_name','menu_id','page_name','odr','action_name','is_publish','is_front','article_id','parent_id'
    ];
}
