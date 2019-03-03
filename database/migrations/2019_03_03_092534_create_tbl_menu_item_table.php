<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTblMenuItemTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_menu_item', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('menu_item_name')->length(250);
            $table->integer('odr')->length(11);
            $table->string('action_name')->length(250);
            $table->string('page_name')->length(50);
            $table->tinyInteger('is_publish')->length(4);
            $table->tinyInteger('is_front')->length(4);
            $table->integer('article_id')->length(11)->unsigned();
            $table->integer('menu_id')->length(11)->unsigned();
            $table->integer('parent_id')->length(11);

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
        Schema::dropIfExists('tbl_menu_item');
    }
}
