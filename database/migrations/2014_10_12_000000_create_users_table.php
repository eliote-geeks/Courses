<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
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
            $table->string('name')->nullable();
            $table->foreignId('role_id')->default(1)->references('id')->on('roles')->onDelete('cascade');
            $table->string('first_name')->nullable();
            $table->string('last_name')->nullable();
            $table->string('gender')->default('male');
            $table->string('email')->unique();
            $table->string('date_of_birth')->nullable();
            $table->tinyInteger('is_subscribed')->nullable()->default(0);
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');            
            $table->rememberToken();
            $table->softDeletes();
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
}
