<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOurteamsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ourteams', function (Blueprint $table) {
            $table->id();
            $table->string('member_name');
            $table->string('facebook');
            $table->string('twitter');
            $table->string('linkedin');
            $table->string('pinterest');
            $table->string('member_role');
            $table->string('contact');
            $table->string('email');
            $table->string('activestatus');
            $table->string('position');
            $table->SoftDeletes();
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
        Schema::dropIfExists('ourteams');
    }
}
