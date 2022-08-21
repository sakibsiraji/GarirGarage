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
          $table->string('photo')->nullable();
          $table->string('title')->nullable();
          $table->string('name');
          $table->string('last_name')->nullable();
          $table->string('phone')->unique();
          $table->timestamp('phone_verified_at')->nullable();
          $table->string('email')->unique()->nullable();
          $table->timestamp('email_verified_at')->nullable();
          $table->string('password');
          $table->tinyInteger('type')->default(0);
          /* Users: 0=>User, 1=>Super Admin, 2=>Agent Admin, 3=>Garage Owner, 4=>Garage Manager */
          $table->tinyInteger('status')->default(0);
          /* Status: 0=>Active, 1=>Deactive, 2=>Suspended, 3=>Banned */
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
