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
        Schema::table('skill', function (Blueprint $table) {
            $table->foreign(['LevelId'], 'level')->references(['Id'])->on('level')->onUpdate('NO ACTION')->onDelete('NO ACTION');
            $table->foreign(['TopicId'], 'topic_skill')->references(['Id'])->on('topic')->onUpdate('NO ACTION')->onDelete('NO ACTION');
            $table->foreign(['UserId'], 'user_skill')->references(['Id'])->on('user')->onUpdate('NO ACTION')->onDelete('NO ACTION');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('skill', function (Blueprint $table) {
            $table->dropForeign('level');
            $table->dropForeign('topic_skill');
            $table->dropForeign('user_skill');
        });
    }
};
