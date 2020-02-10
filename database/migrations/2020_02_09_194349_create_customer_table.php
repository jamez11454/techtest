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
        Schema::create('customers', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('first_name');
            $table->string('last_name');
            $table->string('company');
            $table->text('profession');
            $table->string('chapter_name');
            $table->string('phone_number');
            $table->string('alt_phone_number')->default('');
            $table->string('fax_number')->default('');
            $table->string('cell_number')->default('');
            $table->string('email')->default('');
            $table->string('website')->default('');
            $table->string('address')->default('');
            $table->string('city')->default('');
            $table->string('state')->default('')->nullable();
            $table->string('zip')->default('');
            $table->string('substitute')->default('')->nullable();
            $table->string('status')->default('active');
            $table->date('join_date');
            $table->date('renewal_date');
            $table->string('sponsor')->default('')->nullable();
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
