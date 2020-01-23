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
            $table->string('leaderName');
            $table->string('leaderAddress');
            $table->string('leaderBirth');
            $table->string('leaderEmail');
            $table->string('leaderNumber');
            $table->string('leaderLine');
            $table->string('leaderGithub');
            $table->string('leaderCV')->nullable();
            $table->string('leaderProject')->nullable();
            $table->string('member1Name');
            $table->string('member1Address');
            $table->string('member1Birth');
            $table->string('member1Email');
            $table->string('member1Number');
            $table->string('member1Line');
            $table->string('member1Github');
            $table->string('member1CV')->nullable();
            $table->string('member1Project')->nullable();
            $table->string('member2Name');
            $table->string('member2Address');
            $table->string('member2Birth');
            $table->string('member2Email');
            $table->string('member2Number');
            $table->string('member2Line');
            $table->string('member2Github');
            $table->string('member2CV')->nullable();
            $table->string('member2Project')->nullable();
            $table->string('payment_image')->nullable();
            $table->boolean('payment_status')->nullable();
            $table->string('teamname')->nullable();
            $table->timestamps();
            // $table->foreign('id')->references('id')->on('users')->onDelete('cascade');
            // $table->foreign('member_id2')->references('id')->on('members')->onDelete('cascade');
            // $table->foreign('member_id3')->references('id')->on('members')->onDelete('cascade');
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
