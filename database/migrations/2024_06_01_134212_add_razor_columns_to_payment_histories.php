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
        Schema::table('payment_histories', function (Blueprint $table) {
            $table->string('razorpay_payment_id')->nullable()->after('user_id');
            $table->string('razorpay_order_id')->nullable()->after('user_id');
            $table->string('razorpay_signature')->nullable()->after('user_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('payment_histories', function (Blueprint $table) {
            $table->dropColumn('razorpay_payment_id');
            $table->dropColumn('razorpay_order_id');
            $table->dropColumn('razorpay_signature');
        });
    }
};
