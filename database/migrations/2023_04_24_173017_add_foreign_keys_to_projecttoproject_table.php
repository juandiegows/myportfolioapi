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
        Schema::table('projecttoproject', function (Blueprint $table) {
            $table->foreign(['PrincipalProojecId'], 'project_princpial')->references(['Id'])->on('project')->onUpdate('NO ACTION')->onDelete('NO ACTION');
            $table->foreign(['ProjectId'], 'Project_second')->references(['Id'])->on('project')->onUpdate('NO ACTION')->onDelete('NO ACTION');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('projecttoproject', function (Blueprint $table) {
            $table->dropForeign('project_princpial');
            $table->dropForeign('Project_second');
        });
    }
};
