<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DraggableAnswer extends Model
{
    protected $table = "answer_to_draggable";
    protected $hidden = ['id', "question_id"];
}
