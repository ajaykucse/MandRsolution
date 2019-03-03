<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTblFileMapTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_file_map', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('article_id')->length(11)->unsigned();
            $table->integer('file_id')->length(11)->unsigned();
            $table->integer('parent_art_id')->length(11)->unsigned();
            $table->tinyInteger('featured')->length(4);

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
        Schema::dropIfExists('tbl_file_map');
    }
}
