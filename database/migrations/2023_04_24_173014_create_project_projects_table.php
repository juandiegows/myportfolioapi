<?php

use App\Models\Project;
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
        Schema::create('project_projects', function (Blueprint $table) {
            $table->foreignIdFor(Project::class, 'principal_project_id')->constrained();
            $table->foreignIdFor(Project::class)->constrained();

            $table->primary(['principal_project_id', 'project_Id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('project_projects');
    }
};