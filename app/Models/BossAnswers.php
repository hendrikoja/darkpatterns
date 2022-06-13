<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BossAnswers extends Model
{
    protected $table = "boss_answers";
    protected $hidden = ['id', "question_id"];
}
