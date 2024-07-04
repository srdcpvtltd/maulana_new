<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
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
        
        DB::table('gateway_details')->insert([
            [
                'merchant_name' => 'MADHUSUDAN LAW UNIVERSITY',
                'key_id' => 'rzp_live_7K6wvuUTFOGlx9',
                'key_secret' => 'Edbmp2uSnI4IE7jHx4holFxy',
                'type' => 'Normal',
            ],
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('gateway_details', function (Blueprint $table) {
            //
        });
    }
};
