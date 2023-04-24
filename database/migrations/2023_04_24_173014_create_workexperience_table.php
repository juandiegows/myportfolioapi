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
        Schema::create('workexperience', function (Blueprint $table) {
            $table->integer('Id')->primary();
            $table->integer('UserId')->index('user_work_idx');
            $table->string('Business', 100);
            $table->text('Description')->nullable();
            $table->text('SpanishDescription')->nullable();
            $table->string('Rol', 450)->nullable();
            $table->string('SpanishRol', 450)->nullable();
            $table->date('StartDate');
            $table->date('EndDate')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('workexperience');
    }
};
