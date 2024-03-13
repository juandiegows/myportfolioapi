<?php

use App\Models\User;
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
        Schema::create('educations', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(User::class)->constrained();
            $table->string('entity', 200);
            $table->string('title', 200);
            $table->string('spanish_title', 200)->nullable();
            $table->string('title_education', 200)->nullable();
            $table->string('spanish_title_education', 200)->nullable();
            $table->text('description')->nullable();
            $table->text('spanish_description')->nullable();
            $table->text('certificate_url')->nullable();
            $table->date('start_date');
            $table->date('end_date')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('educations');
    }
};
