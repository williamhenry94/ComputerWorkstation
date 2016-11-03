<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AssessmentQuestionModel extends Model
{
    //
    protected $table="assessment_question";
    public $timestamps=false;
    public $incrementing=false;

    protected $hidden=["question_id"];
}
