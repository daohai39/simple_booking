<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateServicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('services', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name',100);
            $table->text('description')->nullable();
            $table->dateTime('start_date');
            $table->dateTime('end_date');
            $table->tinyInteger('is_over')->default(0);
            $table->timestamps();
        });

        Schema::create('service_staff',function (Blueprint $table) {
            $table->integer('service_id')->unsigned();
            $table->integer('staff_id')->unsigned();
            $table->timestamps();
        });

        Schema::create('customer_service', function (Blueprint $table) {
            $table->integer('customer_id')->unsigned();
            $table->integer('service_id')->unsigned();
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
        Schema::dropIfExists('services');
        Schema::dropIfExists('service_staff');
        Schema::dropIfExists('customer_service');
    }
}
