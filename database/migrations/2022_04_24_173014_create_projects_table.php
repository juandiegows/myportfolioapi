<?php

use App\Models\Client;
use App\Models\Image;
use App\Models\Project;
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
        Schema::create('projects', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Client::class)->nullable()->constrained();
            $table->foreignIdFor(Project::class, 'principal_project_id')->nullable()->constrained('projects');
            $table->foreignId('front_page_id')->constrained('images');
            $table->string('title', 200);
            $table->string('spanish_title', 200);
            $table->string('short_description', 200);
            $table->string('spanish_short_description', 200);
            $table->text('description');
            $table->text('spanish_description');
            $table->string('view_link', 200)->nullable();
            $table->string('download_link', 200)->nullable();
            $table->string('video_link', 200)->nullable();
            $table->date('date');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('projects');
    }
};
