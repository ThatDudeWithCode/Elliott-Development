<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAppointmentUserPivotTable extends Migration
{
    public function up()
    {
        Schema::create('appointment_user', function (Blueprint $table) {
            $table->unsignedInteger('appointment_id');
            $table->foreign('appointment_id', 'appointment_id_fk_1554690')->references('id')->on('appointments')->onDelete('cascade');
            $table->unsignedInteger('user_id');
            $table->foreign('user_id', 'user_id_fk_1554690')->references('id')->on('users')->onDelete('cascade');
        });
    }
}
