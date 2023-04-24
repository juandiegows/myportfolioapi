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
        Schema::table('imageproject', function (Blueprint $table) {
            $table->foreign(['ImageId'], 'image_project')->references(['Id'])->on('image')->onUpdate('NO ACTION')->onDelete('NO ACTION');
            $table->foreign(['ProjectId'], 'project_image')->references(['Id'])->on('project')->onUpdate('NO ACTION')->onDelete('NO ACTION');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('imageproject', function (Blueprint $table) {
            $table->dropForeign('image_project');
            $table->dropForeign('project_image');
        });
    }
};
