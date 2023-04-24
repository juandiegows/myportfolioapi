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
        Schema::table('participant', function (Blueprint $table) {
            $table->foreign(['ClientId'], 'client')->references(['Id'])->on('client')->onUpdate('NO ACTION')->onDelete('NO ACTION');
            $table->foreign(['UserId'], 'user')->references(['Id'])->on('user')->onUpdate('NO ACTION')->onDelete('NO ACTION');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('participant', function (Blueprint $table) {
            $table->dropForeign('client');
            $table->dropForeign('user');
        });
    }
};
