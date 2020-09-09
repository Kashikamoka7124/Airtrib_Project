<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCustomersTable extends Migration
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
            $table->longText('stripe_card')->nullable();
            $table->longText('stripe_customer')->nullable();
            $table->unsignedBigInteger('user_id')->nullable();
            $table->string('name');
            $table->string('gender');
            $table->string('first_name');
            $table->string('last_name');
            $table->string('email')->unique();
            $table->unsignedInteger('country_id')->nullable();
            $table->string('country_code');
            $table->string('phone');
            $table->string('postcode')->nullable();
            $table->string('city')->nullable();
            $table->string('birth_date')->nullable();
            $table->string('address')->nullable();
            $table->string('address_2')->nullable();
            $table->string('passport')->nullable();
            $table->string('passport_expire')->nullable();
            $table->boolean('individual')->default(true);
            $table->string('corporate_name')->nullable();
            $table->string('corporate_type')->nullable();
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
        Schema::dropIfExists('customers');
    }
}
