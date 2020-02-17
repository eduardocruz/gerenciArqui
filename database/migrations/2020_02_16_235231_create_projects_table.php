<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProjectsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('projects', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->boolean('active')->default(true);
            $table->dateTime('finished_at')->nullable();
            $table->integer('percentage')->nullable();
            $table->float('budget', 8, 2)->nullable();
            $table->float('cost', 8, 2)->nullable();
            $table->date('estimated_start_at')->nullable();
            $table->date('start_at')->nullable();
            $table->date('estimated_end_at')->nullable();
            $table->date('end_at')->nullable();
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
}
