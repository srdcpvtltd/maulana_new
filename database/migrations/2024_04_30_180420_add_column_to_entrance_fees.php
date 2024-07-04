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
        Schema::table('entrance_fees', function (Blueprint $table) {
            $table->date('download_start_date')->nullable()->after('exam_fee');
            $table->date('download_end_date')->nullable()->after('exam_fee');
            $table->boolean('exam_status')->default(1)->nullable()->after('exam_fee');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('entrance_fees', function (Blueprint $table) {
            $table->dropColumn('download_start_date');
            $table->dropColumn('download_end_date');
            $table->dropColumn('exam_status');
        });
    }
};
