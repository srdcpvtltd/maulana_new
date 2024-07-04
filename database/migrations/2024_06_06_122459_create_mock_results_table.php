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
        Schema::create('mock_results', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id');
            $table->integer('quiz_id');
            $table->integer('quiz_score');
            $table->integer('achieved_score');
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
        Schema::dropIfExists('mock_results');
    }
};
