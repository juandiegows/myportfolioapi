<?php

use App\Models\Profession;
use App\Models\User;
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
        Schema::create('profession_users', function (Blueprint $table) {
            $table->foreignIdFor(Profession::class)->constrained();
            $table->foreignIdFor(User::class)->constrained();
            $table->primary(['profession_id', 'user_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('profession_users');
    }
};