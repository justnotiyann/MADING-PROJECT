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
            $table->id(); // id udah dibuat oleh laravel
            $table->string('name'); // nama kolom
            $table->string('email'); // nama kolom
            $table->string('username'); // nama kolom
            $table->string('password'); // nama kolom
            $table->timestamps(); // created_At updated_at
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
