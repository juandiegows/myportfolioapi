<?php

use App\Models\Topic;
use App\Models\TypeTopic;
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
        Schema::create('topics', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(TypeTopic::class)->constrained();
            $table->foreignIdFor(Topic::class)->nullable()->constrained();
            $table->string('name', 400)->unique();
            $table->string('spanish_name', 400)->unique();
            $table->string('link_image', 400)->nullable();
            $table->text('description')->nullable();
            $table->text('spanish_description')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('topics');
    }
};