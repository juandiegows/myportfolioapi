<?php

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
        Schema::create('events', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(User::class)->default(1)->constrained()->cascadeOnDelete();
            $table->date('date'); 
            $table->string('title'); 
            $table->string('spanish_title'); 
            $table->text('description')->nullable(); 
            $table->text('spanish_description')->nullable(); 
            $table->string('url')->nullable(); 
            $table->string('type')->default('none'); 
            $table->boolean('is_initial')->default(false);
            $table->timestamps(); 
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('events');
    }
};
