<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMainCategoryTranslationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('main_category_translation', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('main_cat_id')->unsigned();
            $table->string('locale');
            $table->string('name');

            $table->unique('main_cat_id','locale');
            $table->foreign('main_cat_id')->references('id')->on('main_category');




        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('main_category_translation');
    }
}
