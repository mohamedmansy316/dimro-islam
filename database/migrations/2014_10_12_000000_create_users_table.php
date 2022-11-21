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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('image')->default('user.png');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('phone_number')->nullable();
            $table->string('password');
            $table->integer('role')->default(0);
            $table->integer('active')->default(1);
            $table->string('country')->nullable();
            $table->string('city')->nullable();
            $table->string('street_address')->nullable();
            $table->string('zip_code')->nullable();
            $table->integer('code');
            $table->integer('confirmed')->default('0');
            $table->string('auth_provider')->default('Signup');
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
};
