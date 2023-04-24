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
        Schema::table('socialmediauser', function (Blueprint $table) {
            $table->foreign(['SocialMediaId'], 'social_media_user')->references(['Id'])->on('socialmedia')->onUpdate('NO ACTION')->onDelete('NO ACTION');
            $table->foreign(['UserId'], 'user_social')->references(['Id'])->on('user')->onUpdate('NO ACTION')->onDelete('NO ACTION');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('socialmediauser', function (Blueprint $table) {
            $table->dropForeign('social_media_user');
            $table->dropForeign('user_social');
        });
    }
};
