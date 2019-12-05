<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRandomDataTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('random_data', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('userId');
            $table->string('name');
            $table->text('address');
            $table->string('phoneNumber')->nullable();
            $table->string('company')->nullable();
            $table->string('jobTitle')->nullable();
            $table->string('email')->nullable();
            $table->string('companyEmail')->nullable();
            $table->string('password')->nullable();
            $table->string('ipv4')->nullable();
            $table->string('localIpv4')->nullable();
            $table->string('ipv6')->nullable();
            $table->string('macAddress')->nullable();
            $table->string('userAgent')->nullable();
            $table->string('creditCardType')->nullable();
            $table->string('creditCardNumber')->nullable();
            $table->string('creditCardExpirationDateString')->nullable();
            $table->string('locale')->nullable();
            $table->string('bank')->nullable();
            $table->string('secureNumber')->nullable();
            $table->string('bankAccountNumber')->nullable();
            $table->foreign('userId')
            ->references('id')
            ->on('users');
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
        Schema::dropIfExists('random_data');
    }
}
