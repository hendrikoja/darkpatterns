<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAnswerToDraggableTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('answer_to_draggable', function (Blueprint $table) {
            $table->integer('id', true);
            $table->boolean('correct');
            $table->integer('correct_list')->nullable();
            $table->string('image_loc', 120)->nullable();
            $table->string('description', 120)->nullable();
            $table->integer('question_id')->index('question_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('answer_to_draggable');
    }
}
