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
            $table->string('title');
            $table->string('slug');
            $table->enum('status', ['Available', 'Sold Out', 'hidden']);
            $table->string('image');
            $table->string('sku');
            $table->string('color')->nullable();
            $table->text('description');
            $table->text('content')->nullable();
            $table->string('price');
            $table->enum('for_gender', ['male', 'female', 'unisex']);
            $table->string('size')->nullable();
            $table->string('height')->nullable();
            $table->string('width')->nullable();
            $table->string('depth')->nullable();
            $table->integer('qty');
            $table->integer('brand_id')->nullable();
            $table->integer('category_id');
            $table->integer('user_id');
            $table->integer('discount_id')->nullable();
            $table->integer('is_featured')->default(0);
            $table->string('search_index');
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
