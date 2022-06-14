<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BossStory extends Model
{
    protected $table = "boss_story";
    protected $hidden = ['id', "question_id"];
}
