<?php

use App\Models\OutstandingAchievement;
use App\Models\User;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('outstanding_achievements', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('spanish_name');
            $table->string('link')->nullable();
            $table->date('date')->nullable();
            $table->foreignIdFor(User::class)->constrained();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('outstanding_achievements');
    }
};
