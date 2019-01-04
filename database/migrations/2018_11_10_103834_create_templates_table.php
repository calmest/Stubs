<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTemplatesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('templates', function (Blueprint $table) {
            $table->increments('id');
            $table->string('template_type');
            $table->string('template_serial');
            $table->string('template_style');
            $table->string('company_name');
            $table->string('company_address');
            $table->string('employee_name');
            $table->string('employee_address');
            $table->string('ssn_number');
            $table->string('report_start_date');
            $table->string('report_end_date');
            $table->string('pay_date');
            $table->string('employee_id');
            $table->string('income');
            $table->string('rate');
            $table->string('hours');
            $table->string('current_pay');
            $table->string('medical_tax');
            $table->string('social_tax');
            $table->string('federal_tax');
            $table->string('path')->nullable();
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
        Schema::dropIfExists('templates');
    }
}
