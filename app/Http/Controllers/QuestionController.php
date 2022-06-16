<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Question;
use DB;

class QuestionController extends Controller
{
    public function index()
    {
        $questions_regular = Question::with("answers", "boss_answers", "question_story") -> where("category_id", "=", 1) -> get();
        $questions_draggable = Question::with("draggable_answers", "boss_answers", "question_story") -> where("category_id", "=", 2) -> get();
        return response() -> json($questions_regular -> merge($questions_draggable));
    }

    public function add_question(Request $request) {
        $question = new Question();
        $question->description = $request->description;
        $question->points = $request->points; 
        $question->save();
    }

    //TODO: Piltide salvestamine, selle järgi pildi asukoha võtmine.
    public function add_answer(Request $request) {
        $question = Question::find($request->question_id);

        $answer = new AnswerToQuestion();
        $answer->description = $request->description;
        $anser->correct = $request->correct;

        $question->answers()->save($answer);
    }

    public function add_story(Request $request) {
        $question = Question::find($request->question_id);
        
        $story = new BossStory();
        $story->description = $request->description;

        $question->question_story()->save($story);
    }

    public function add_boss_answer(Request $request) {
        $question = Question::find($request->question_id);
        
        $story = new BossAnswer();
        $story->description = $request->description;

        $question->boss_answers()->save($story);
    }
}
