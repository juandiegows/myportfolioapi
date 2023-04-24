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
        Schema::create('socialmediauser', function (Blueprint $table) {
            $table->integer('Id')->primary();
            $table->integer('UserId')->index('user_social');
            $table->integer('SocialMediaId')->index('social_media_user_idx');
            $table->string('Link', 200)->unique('Link_UNIQUE');
            $table->tinyInteger('IsPrincipal');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('socialmediauser');
    }
};
