<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSubCategorysTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sub_categorys', function (Blueprint $table) {
            $table->increments('id');
            $table->text('picture')->nullable();
            $table->string('slug')->nullable()->unique();
            $table->boolean('is_active');
            $table->timestamps();

            $table->foreign('cat_id')->references('id')->on('main_category')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sub_categorys');
    }
}
