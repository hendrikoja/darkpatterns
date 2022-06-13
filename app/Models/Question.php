<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    protected $hidden = ['id'];

    public function question_story()
    {
        return $this->hasMany(BossStory::class);
    }
    
    public function answers()
    {
        return $this->hasMany(AnswerToQuestion::class);
    }

    public function boss_answers()
    {
        return $this->hasMany(BossAnswers::class);
    }
}
