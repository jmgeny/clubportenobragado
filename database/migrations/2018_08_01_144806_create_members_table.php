<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMembersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('members', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre')->nullable();
            $table->string('apellido')->nullable();
            $table->string('mail')->nullable();
            $table->integer('dni')->nullable();
            $table->date('nacimiento')->nullable();
            $table->date('ingreso')->nullable();
            $table->string('address')->nullable();
            $table->unsignedInteger('city_id');          
            $table->string('phone')->nullable();
            $table->string('avatar')->default('default.gif');
            $table->boolean('estado');
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
        Schema::dropIfExists('members');
    }
}
