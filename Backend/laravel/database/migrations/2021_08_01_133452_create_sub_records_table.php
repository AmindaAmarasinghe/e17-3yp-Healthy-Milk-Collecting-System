<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSubRecordsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sub_records', function (Blueprint $table) {
            $table->id('subrecord_id');
            $table->timestamps();
            $table->float('ph_value');
            $table->float('density');
            $table->float('volume');
            $table->integer('fat_rate');
            $table->float('temperature');
            $table->dateTime('added_date');
            $table->string('grade');
            $table->float('price_rate');

            $table->unsignedBigInteger('daily_record_id');
            $table->foreign('daily_record_id')->references('id')->on('daily_records');


            $table->unsignedBigInteger('device_id');
            $table->foreign('device_id')->references('device_id')->on('devices');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sub_records');
    }
}
