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
<<<<<<< HEAD
            $table->string('companyname')->default('none');;
            $table->string('companystreetaddress')->default('none');;
            $table->string('companycityaddress')->default('none');;
            $table->string('employeename')->default('none');;
            $table->string('employeestreetaddress')->default('none');;
            $table->string('employeecityaddress')->default('none');;
=======
            $table->string('companyname')->default('nill');
            $table->string('companystreetaddress')->default('nill');
            $table->string('companycityaddress')->default('nill');
            $table->string('employeename')->default('nill');
            $table->string('employeestreetaddress')->default('nill');
            $table->string('employeecityaddress')->default('nill');
>>>>>>> ed75deee1d00f1e7a470b5865c2dba54ce43d03c
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
