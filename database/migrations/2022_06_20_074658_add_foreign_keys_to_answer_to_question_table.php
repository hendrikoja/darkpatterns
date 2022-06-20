<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToAnswerToQuestionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('answer_to_question', function (Blueprint $table) {
            $table->foreign(['question_id'], 'answer_to_question_question')->references(['id'])->on('questions');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('answer_to_question', function (Blueprint $table) {
            $table->dropForeign('answer_to_question_question');
        });
    }
}
