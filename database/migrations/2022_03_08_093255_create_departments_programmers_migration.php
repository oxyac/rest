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
        Schema::create('department_programmer', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('department_id')->unsigned();
            $table->foreign('department_id')->references('id')->on('departments');
            $table->bigInteger('programmer_id')->unsigned();
            $table->foreign('programmer_id')->references('id')->on('programmers');
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
        Schema::dropIfExists('department_programmer');
    }
};
