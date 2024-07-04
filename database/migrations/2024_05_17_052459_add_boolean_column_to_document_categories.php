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
        Schema::table('document_categories', function (Blueprint $table) {
            $table->boolean('is_disabled_person')->default(0)->nullable()->after('name');
            $table->boolean('is_ex_service_man')->default(0)->nullable()->after('name');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('document_categories', function (Blueprint $table) {
            $table->dropColumn('is_disabled_person');
            $table->dropColumn('is_ex_service_man');
        });
    }
};
