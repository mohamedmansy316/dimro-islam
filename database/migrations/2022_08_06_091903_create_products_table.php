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
            $table->enum('status', ['0', '1']);
            $table->string('image');
            $table->string('sku');
            $table->string('color')->nullable();
            $table->text('description');
            $table->text('content')->nullable();
            $table->string('price');
            $table->string('size')->nullable();
            $table->integer('height')->nullable();
            $table->integer('width')->nullable();
            $table->integer('depth')->nullable();
            $table->integer('qty');
            $table->integer('in_stock')->default(1);
            $table->integer('category_id');
            $table->integer('user_id');
            $table->integer('discount_id')->nullable();
            $table->integer('is_featured')->default(0);
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
