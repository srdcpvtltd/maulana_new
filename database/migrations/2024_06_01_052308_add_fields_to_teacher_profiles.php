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
        Schema::table('teacher_profiles', function (Blueprint $table) {
            $table->integer('course_id')->nullable();
            $table->integer('subject_id')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('teacher_profiles', function (Blueprint $table) {
            $table->dropColumn('course_id');
            $table->dropColumn('subject_id');
        });
    }
};
