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
        Schema::table('clienttopic', function (Blueprint $table) {
            $table->foreign(['ClientId'], 'client_topic')->references(['Id'])->on('client')->onUpdate('NO ACTION')->onDelete('NO ACTION');
            $table->foreign(['TopicId'], 'topic_client')->references(['Id'])->on('topic')->onUpdate('NO ACTION')->onDelete('NO ACTION');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('clienttopic', function (Blueprint $table) {
            $table->dropForeign('client_topic');
            $table->dropForeign('topic_client');
        });
    }
};
