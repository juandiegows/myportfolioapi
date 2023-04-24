<?php

use App\Models\Project;
use App\Models\Topic;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('topic_projects', function (Blueprint $table) {
            $table->foreignIdFor(Topic::class)->constrained();
            $table->foreignIdFor(Project::class)->constrained();
            $table->primary(['topic_id', 'project_id']);
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