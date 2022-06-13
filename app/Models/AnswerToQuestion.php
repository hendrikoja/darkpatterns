<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AnswerToQuestion extends Model
{
    protected $table = "answer_to_question";
    protected $hidden = ['id', "question_id"];
}
