<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVisitorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('visitors', function (Blueprint $table) {
            $table->increments('id');
            $table->string('code', 10);
            $table->string('name');
            $table->tinyInteger('age');
            $table->string('status');
            $table->string('email');
            $table->string('mobile');
            $table->string('city');
            $table->string('work');
            $table->string('nationality');
            $table->string('national_id');
            $table->text('about_ted');
            $table->string('prev_event', 5);
            $table->text('fav_talks');
            $table->text('why_attend');
            $table->text('how_spread');
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
        Schema::dropIfExists('visitors');
    }
}
