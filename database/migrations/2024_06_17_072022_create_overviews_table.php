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
        Schema::create('overviews', function (Blueprint $table) {
            $table->id();
            $table->integer('faculties')->nullable();
            $table->integer('departments')->nullable();
            $table->integer('centres')->nullable();
            $table->integer('programmes')->nullable();
            $table->integer('e-resources')->nullable();
            $table->integer('mou')->nullable();
            $table->integer('students')->nullable();
            $table->integer('scholars')->nullable();
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
        Schema::dropIfExists('overviews');
    }
};
