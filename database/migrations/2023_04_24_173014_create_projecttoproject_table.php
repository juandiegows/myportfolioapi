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
        Schema::create('projecttoproject', function (Blueprint $table) {
            $table->integer('PrincipalProojecId');
            $table->integer('ProjectId')->index('Project_second_idx');

            $table->primary(['PrincipalProojecId', 'ProjectId']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('projecttoproject');
    }
};
