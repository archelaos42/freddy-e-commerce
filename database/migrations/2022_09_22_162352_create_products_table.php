<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->increments('id');

            $table->unsignedInteger('collection_id')->index();
            $table->foreign('collection_id')->references('id')->on('collections')->onDelete('cascade');

            $table->unsignedInteger('category_id')->nullable()->index();
            $table->foreign('category_id')->references('id')->on('categories')->onDelete('cascade');

            $table->unsignedInteger('subcategory_id')->nullable()->index();
            $table->foreign('subcategory_id')->references('id')->on('subcategories')->onDelete('cascade');

            $table->integer('price');
            $table->string('size')->nullable();
            $table->string('color')->nullable();
            $table->string('length')->nullable();
            $table->string('waist')->nullable();
            $table->string('code');
            $table->string('name');
            $table->string('slug');
            $table->string('featuredimage')->nullable();
            $table->text('description')->nullable();
            $table->unsignedInteger('quantity');
            $table->boolean('popular')->default(0);




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
        Schema::dropIfExists('products');
    }
};
