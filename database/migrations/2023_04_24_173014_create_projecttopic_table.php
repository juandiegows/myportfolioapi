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
        Schema::create('projecttopic', function (Blueprint $table) {
            $table->integer('TopicId');
            $table->integer('ProjectId')->index('project_project_topic_idx');

            $table->primary(['TopicId', 'ProjectId']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('projecttopic');
    }
};
