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
                'merchant_id' => 'APIMER',
                'merchant_sub_id' => 'BHUMLU',
                'encryption_key' => '84BA57072F1E39ED568B73729B1A398B',
                'encryption_iv' => 'vH6YAokqhPd45z2g',
                'sign_key' => 'vH6YAokqhPd45z2g',
                'secret_password_hash' => '9C7B13D3C95E56B21C629F8C2D7FB3545AD11779213E7B33FED5C15466C7508D',
                'token_generate_url' => 'https://www.iobnet.co.in/iobpay/iobpayRESTService/apitokenservice/generatenewtoken/',
                'txn_initiation_url' => 'https://www.iobnet.co.in/iobpay/apitxninit.do',
                'tnx_status_url' => 'https://www.iobnet.co.in/iobpay/iobpayRESTService/apitxnstatusservice/gettxnstatus/',
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
        //
    }
};
