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
        Schema::table('gateway_details', function (Blueprint $table) {
            $table->string('type')->default('IOB')->after('user_id');
            $table->string('key_id')->default('IOB')->after('user_id');
            $table->string('key_secret')->default('IOB')->after('user_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('gateway_details', function (Blueprint $table) {
            $table->dropColumn('type');
            $table->dropColumn('key_id');
            $table->dropColumn('key_secret');
        });
    }
};
