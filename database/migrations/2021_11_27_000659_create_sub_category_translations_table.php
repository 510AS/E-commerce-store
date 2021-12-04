<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSubCategoryTranslationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sub_category_translations', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('sub_cat_id')->unsigned();
            $table->string('locale')->index();
            $table->string('name');
            $table->timestamps();

            $table->unique(['sub_cat_id','locale']);
            $table->foreign('sub_cat_id')->references('id')->on('sub_categorys')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sub_category_translations');
    }
}
