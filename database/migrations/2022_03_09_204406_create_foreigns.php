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

        Schema::table('projects', function (Blueprint $table) {
            $table->foreign('department_id')->references('id')->on('departments');
        });

        Schema::table('clients', function (Blueprint $table) {
            $table->foreign('project_id')->references('id')->on('projects');
        });
        DB::table('projects')->insert(
            array(
                'id' => 1,
                'name' => 'manager.go'
            )
        );
        DB::table('clients')->insert(
            array(
                'id' => 1,
                'name' => 'Megafon',
                'country' => 'Moldova',
                'project_id' => 1
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
                'name' => 'Moldavian'
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
