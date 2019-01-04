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
            $table->string('companyname')->default('none');;
            $table->string('companystreetaddress')->default('none');;
            $table->string('companycityaddress')->default('none');;
            $table->string('employeename')->default('none');;
            $table->string('employeestreetaddress')->default('none');;
            $table->string('employeecityaddress')->default('none');;
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
