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
        Schema::table('center_mappings', function (Blueprint $table) {
            $table->foreignId('shift_id')->nullable()->after('exam_time');
            $table->foreign('shift_id')->references('id')->on('shifts')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('center_mappings', function (Blueprint $table) {
            $table->dropColumn('shift_id');
        });
    }
};
