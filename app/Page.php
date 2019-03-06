<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Page extends Model
{
    protected $table = 'tbl_page_name';

      protected $fillable = [
        'page_name',
    ];
}
