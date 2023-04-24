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
        Schema::table('workexperiencetopic', function (Blueprint $table) {
            $table->foreign(['TopicId'], 'topic_work')->references(['Id'])->on('topic')->onUpdate('NO ACTION')->onDelete('NO ACTION');
            $table->foreign(['WorkExperienceId'], 'work')->references(['Id'])->on('workexperience')->onUpdate('NO ACTION')->onDelete('NO ACTION');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('workexperiencetopic', function (Blueprint $table) {
            $table->dropForeign('topic_work');
            $table->dropForeign('work');
        });
    }
};
