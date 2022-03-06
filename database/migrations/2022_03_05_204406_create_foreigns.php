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
        Schema::table('departments', function (Blueprint $table) {
            $table->bigInteger('project_id')->unsigned();
            $table->foreign('project_id')->references('id')->on('projects');

            $table->bigInteger('lead_id')->unsigned();
            $table->foreign('lead_id')->references('id')->on('leads');
        });
        Schema::table('programmers', function (Blueprint $table) {
            $table->bigInteger('department_id')->unsigned();
            $table->foreign('department_id')->references('id')->on('departments');
        });
        Schema::table('projects', function (Blueprint $table) {
            $table->bigInteger('client_id')->unsigned();
            $table->foreign('client_id')->references('id')->on('clients');
        });
        DB::table('clients')->insert(
            array(
                'id' => 1,
                'name' => 'Megafon',
                'country' => 'MD'
            )
        );

        DB::table('projects')->insert(
            array(
                'id' => 1,
                'name' => 'manager.go',
                'client_id' => 1
            )
        );

        DB::table('leads')->insert(
            array(
                'id' => 1,
                'first_name' => 'Lego',
                'last_name' => 'Oxyac'
            )
        );
        DB::table('departments')->insert(
            array(
                'id' => 1,
                'language' => 'Moldavian',
                'project_id' => 1,
                'lead_id' => 1
            )
        );
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('foreigns');
    }
};
