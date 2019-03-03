<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTblArticleTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_article', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('title')->length(250);
            $table->text('short_content');
            $table->longText('read_more_content');
            $table->tinyInteger('is_publish')->length(4);
            $table->string('search_keyword')->length(250);
            $table->text('search_desc');
            $table->mediumText('special_desc');
            $table->integer('odr')->length(11);
            $table->integer('prnt_id')->length(11);
            $table->integer('ht')->length(11);
            $table->integer('author_id')->length(11);
            $table->integer('pid')->length(11);
            $table->string('article_type')->length(8);
            $table->integer('special')->length(11);
            $table->decimal('Price',10,0);
            $table->string('ProductCode')->length(10);
            
            $table->timestamps();

 
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tbl_article');
    }
}
