<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddExtraDataToUsers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function($table){
            $table->string('companyname')->default('nill');
            $table->string('companystreetaddress')->default('nill');
            $table->string('companycityaddress')->default('nill');
            $table->string('employeename')->default('nill');
            $table->string('employeestreetaddress')->default('nill');
            $table->string('employeecityaddress')->default('nill');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function($table){
            $table->dropColumn('companyname');
            $table->dropColumn('companystreetaddress');
            $table->dropColumn('companycityaddress');
            $table->dropColumn('employeename');
            $table->dropColumn('employeestreetaddress');
            $table->dropColumn('employeecityaddress');
        });
    }
}
