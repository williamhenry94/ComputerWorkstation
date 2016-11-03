<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AnswerFormModel extends Model
{
    //
    protected $table="answer_form";
    public $timestamps=false;
    public $incremeting=false;
    protected $fillable=["user_id","answer_id","created_at","updated_at","completed_at",'location',"help"];


    public function user(){
    	return $this->belongsTo('App\UsersModel','user_id');
    }
}
