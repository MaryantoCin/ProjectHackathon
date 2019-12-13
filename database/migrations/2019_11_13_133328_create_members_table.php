<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMembersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('members', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->boolean('isLeader');
            $table->string('name');
            $table->string('address');
            $table->string('email');
            $table->string('number');
            $table->string('birth_place');
            $table->string('birth_date');
            $table->string('line_id');
            $table->string('github_id');
            $table->string('image_ktp');
            $table->string('image_cv');
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
        Schema::dropIfExists('members');
    }
}
