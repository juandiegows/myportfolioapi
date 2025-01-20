<?php

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
        Schema::table('users', function (Blueprint $table) {
            $table->string('phone_number')->after('email')->nullable();
            $table->string('address')->after('phone_number')->nullable();
            $table->string('professional_title')->after('phone_number')->nullable();
            $table->string('spanish_professional_title')->after('phone_number')->nullable();
            $table->text('professional_profile')->after( 'address')->nullable();
            $table->text('spanish_professional_profile')->after( 'address')->nullable();
            $table->string('english_level')->after( 'address')->nullable();
            $table->string('portfolio_link')->after( 'address')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn([
                'phone_number',
                'address',
                'professional_profile',
                'spanish_professional_profile',
                'english_level',
                'portfolio_link',
                'spanish_professional_title',
                'professional_title'
            ]);
        });
    }
};
