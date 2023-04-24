<?php

use App\Models\Profession;
use App\Models\WorkExperience;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('work_experience_roles', function (Blueprint $table) {
            $table->foreignIdFor(WorkExperience::class)->constrained();
            $table->foreignIdFor(Profession::class)->constrained();
            $table->primary(['work_experience_id', 'profession_id']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('work_experience_roles');
    }
};