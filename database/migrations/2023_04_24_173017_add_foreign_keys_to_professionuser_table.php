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
        Schema::table('professionuser', function (Blueprint $table) {
            $table->foreign(['ProfessionId'], 'professionUser')->references(['Id'])->on('profession')->onUpdate('NO ACTION')->onDelete('NO ACTION');
            $table->foreign(['UserId'], 'userProfession')->references(['Id'])->on('user')->onUpdate('NO ACTION')->onDelete('NO ACTION');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('professionuser', function (Blueprint $table) {
            $table->dropForeign('professionUser');
            $table->dropForeign('userProfession');
        });
    }
};
