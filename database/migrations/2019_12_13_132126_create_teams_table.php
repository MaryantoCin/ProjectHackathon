<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTeamsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('teams', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->boolean('isFilled');
            $table->string('team_name');
            $table->unsignedBigInteger('member_id1');
            $table->unsignedBigInteger('member_id2');
            $table->unsignedBigInteger('member_id3');
            $table->string('team_email');
            $table->string('team_password');
            $table->string('payment_image');
            $table->boolean('payment_status');
            $table->timestamps();
            $table->foreign('member_id1')->references('id')->on('members')->onDelete('cascade');
            $table->foreign('member_id2')->references('id')->on('members')->onDelete('cascade');
            $table->foreign('member_id3')->references('id')->on('members')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('teams');
    }
}
