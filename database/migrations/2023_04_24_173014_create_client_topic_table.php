<?php

use App\Models\Client;
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
        Schema::create('client_topics', function (Blueprint $table) {
            $table->foreignIdFor(Client::class)->constrained();
            $table->foreignIdFor(Topic::class)->constrained();
            $table->text('description')->nullable();
            $table->text('spanish_description')->nullable();

            $table->primary(['client_id', 'topic_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('clienttopic');
    }
};