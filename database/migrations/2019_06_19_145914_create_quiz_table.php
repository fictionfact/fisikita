<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateQuizTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('quiz', function (Blueprint $table) {
            $table->bigIncrements('id_quiz');
            $table->unsignedBigInteger('course_id');
            $table->foreign('course_id')->references('id_course')->on('course')->onUpdate('cascade')->onDelete('cascade');
            $table->text('question');
            $table->text('wrong_answers');
            $table->text('right_answer');
            $table->text('explanation');
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
        Schema::dropIfExists('quiz');
    }
}
