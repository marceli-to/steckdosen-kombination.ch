<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTrainingSubscribersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('training_subscribers', function (Blueprint $table) {
        $table->id();
        $table->string('firstname', 255);
        $table->string('name', 255);
        $table->string('company', 255);
        $table->string('phone', 255);
        $table->string('email', 255);
        $table->tinyInteger('participants')->default(1);
        $table->date('date');
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
      Schema::dropIfExists('training_subscribers');
    }
}
