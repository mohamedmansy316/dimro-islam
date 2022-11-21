<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateResourcesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('resources', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('slug');
            $table->longText('description');
            $table->longText('content');
            $table->enum('type', ['book', 'audio', 'article', 'fatwa' ,'video']);
            $table->integer('category_id');
            $table->integer('is_active')->default(1);
            $table->integer('author_id')->nullable();
            $table->integer('source_id')->nullable();
            $table->string('url')->nullable();
            $table->string('file')->nullable();
            $table->integer('is_featured')->default(0);
            $table->string('image');
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
        Schema::dropIfExists('resources');
    }
}
