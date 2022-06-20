<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToBossAnswersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('boss_answers', function (Blueprint $table) {
            $table->foreign(['question_id'], 'boss_answers_question')->references(['id'])->on('questions');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('boss_answers', function (Blueprint $table) {
            $table->dropForeign('boss_answers_question');
        });
    }
}
