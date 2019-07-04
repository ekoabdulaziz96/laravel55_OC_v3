<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
            $table->increments('id');
            $table->string('nama',30);
            $table->string('email',50)->unique();
            $table->string('password',80);
            $table->string('status',10);
            $table->string('avatar',200)->nullable()->default(null);
            $table->date('tgl_lahir',30)->nullable()->default(null);
            $table->string('alamat',500)->nullable()->default(null);
            $table->string('no_HP',15)->nullable()->default(null);



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
}
