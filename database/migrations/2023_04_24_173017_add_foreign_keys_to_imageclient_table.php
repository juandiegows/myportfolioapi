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
        Schema::table('imageclient', function (Blueprint $table) {
            $table->foreign(['ClientId'], 'client_image')->references(['Id'])->on('client')->onUpdate('NO ACTION')->onDelete('NO ACTION');
            $table->foreign(['ImageId'], 'image_client')->references(['Id'])->on('image')->onUpdate('NO ACTION')->onDelete('NO ACTION');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('imageclient', function (Blueprint $table) {
            $table->dropForeign('client_image');
            $table->dropForeign('image_client');
        });
    }
};
