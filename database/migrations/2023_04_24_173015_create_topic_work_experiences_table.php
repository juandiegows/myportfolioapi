<?php

use App\Models\Topic;
use App\Models\WorkExperience;
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
        Schema::create('topic_work_experiences', function (Blueprint $table) {
            $table->foreignIdFor(WorkExperience::class)->constrained();
            $table->foreignIdFor(Topic::class)->constrained();
            $table->primary(['topic_id', 'work_experience_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('topic_work_experiences');
    }
};