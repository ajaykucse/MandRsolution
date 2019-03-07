<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $table = 'tbl_article';

    protected $fillable = [
        'title','short_content','read_more_content','is_publish','search_keyword','search_desc','special_desc','odr','prnt_id','ht','author_id','pid','article_type','special','Price','ProductCode'
    ];
}
