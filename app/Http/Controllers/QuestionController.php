<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Question;
use DB;

class QuestionController extends Controller
{
    public function index()
    {
        $questions = Question::with("answers") -> get();
        return response() -> json($questions);
    }
}
