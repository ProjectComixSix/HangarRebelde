<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('title',100);
            $table->float('price', 8, 2);
            $table->string('author',100);
            $table->string('editorial',50);
            $table->boolean('isAvailable');
            $table->boolean('canReserve');
            $table->string('isbn',13)->nullable();
            $table->string('categoryMain',50);
            $table->string('categorySecondary',50)->nullable();
            $table->string('description', 600);
            $table->float('rating', 2, 1)->nullable();
            $table->string('image1');
            $table->string('image2')->nullable();
            $table->string('image3')->nullable();
            $table->string('dateSale')->nullable();
            $table->string('format');
            $table->integer('pages');
            $table->string('tag')->nullable();
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
}
