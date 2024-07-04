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
            $table->date('exam_date')->nullable()->after('exam_status');
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
            $table->dropColumn('exam_date');
        });
    }
};
