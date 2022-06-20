<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAnswerToQuestionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('answer_to_question', function (Blueprint $table) {
            $table->integer('id', true);
            $table->boolean('correct');
            $table->string('image_loc', 120)->nullable();
            $table->string('description', 120)->nullable();
            $table->integer('question_id')->index('answer_to_question_question');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('answer_to_question');
    }
}
