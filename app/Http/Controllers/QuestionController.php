<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Question;
use DB;

class QuestionController extends Controller
{
    public function index()
    {
        $questions = Question::with("answers", "boss_answers", "question_story") -> get();
        return response() -> json($questions);
    }
}
