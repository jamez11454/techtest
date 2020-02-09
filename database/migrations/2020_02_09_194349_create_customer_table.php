<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCustomerTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customer', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('First_Name');
            $table->string('Last_Name');
            $table->string('Company');
            $table->text('Profession');
            $table->string('Chapter_Name');
            $table->string('Phone_Number');
            $table->string('Alt_Phone_Number');
            $table->string('Fax_Number');
            $table->string('Cell_Number');
            $table->string('Email');
            $table->string('Website');
            $table->string('Address');
            $table->string('City');
            $table->string('State');
            $table->string('ZIP');
            $table->string('Substitute');
            $table->boolean('Status');
            $table->time('Join_Date');
            $table->time('Renewal_Date');
            $table->string('Sponsor');
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
        Schema::dropIfExists('customer');
    }
}
