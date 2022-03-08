<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
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

        Schema::dropIfExists('projects');
        Schema::create('projects', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->time('date_start')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->boolean('is_active')->default(true);
            $table->bigInteger('department_id')->unsigned()->nullable();

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
        Schema::dropIfExists('projects');
    }
};
