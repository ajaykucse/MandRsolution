<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class File extends Model
{
	protected $table = 'tbl_file';

      protected $fillable = [
        'title', 'file_name','article_id','url',
    ];
    
}
