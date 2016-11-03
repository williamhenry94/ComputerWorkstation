<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class QuestionsModel extends Model
{
    //
    protected $table="questions";
    public $timestamps=false;
    public $incrementing=false;
    protected $primaryKey="question_id";

    public function tools(){
    	return $this->hasMany('App\AssessmentQuestionModel','question_id')
    				->orderBy('tool_name');
    }
}
