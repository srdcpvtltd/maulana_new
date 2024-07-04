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
        Schema::create('center_mappings', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id');
            $table->string('center_id')->nullable();
            $table->integer('entrance_fee_id')->nullable();
            $table->date('exam_date')->nullable();
            $table->string('exam_time')->nullable();
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
        Schema::dropIfExists('center_mappings');
    }
};
