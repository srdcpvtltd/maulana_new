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
        Schema::create('gateway_details', function (Blueprint $table) {
            $table->id();
            $table->string('merchant_name')->nullable();
            $table->string('merchant_id')->nullable();
            $table->string('merchant_sub_id')->nullable();
            $table->string('encryption_key')->nullable();
            $table->string('encryption_iv')->nullable();
            $table->string('sign_key')->nullable();
            $table->string('secret_password_hash')->nullable();
            $table->string('token_generate_url')->nullable();
            $table->string('txn_initiation_url')->nullable();
            $table->string('tnx_status_url')->nullable();
            $table->foreignId('user_id')->nullable();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
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
        Schema::dropIfExists('gateway_details');
    }
};
