<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AnswersModel extends Model
{
    //
    protected $table="answers";
    public $incrementing=false;
    protected $fillable=["answer_id","user_id","question_id","answer","created_at","updated_at"];

    public function question(){
    	return $this->belongsTo('App\QuestionsModel','question_id');
    }
}
