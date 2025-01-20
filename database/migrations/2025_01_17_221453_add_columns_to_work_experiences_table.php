<?php

use App\Models\WorkExperience;
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
        Schema::table('work_experiences', function (Blueprint $table) {
            $table->boolean('is_secundary')->after('certificate_url')->default(false);
            $table->foreignId('parent')->nullable()->after('certificate_url') ->constrained('work_experiences', 'id') ->nullOnDelete();
            $table->timestamps(); 
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('work_experiences', function (Blueprint $table) {
            $table->dropForeign(['parent']); // Elimina la clave foránea de parent
            $table->dropColumn('parent');    // Elimina la columna parent
            $table->dropColumn('is_secundary');
            $table->dropTimestamps();       // Elimina las columnas de timestamps
        });
    }
};
