<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ExercisesModel extends Model
{
    //
    protected $table="exercises";
    protected $primaryKey="exercise_id";
    public $incrementing=false;
    public $timestamps=false;

    public function target_body_part(){
    	return $this->hasMany('App\AreaIssuesExercisesModel','exercise_id');
    }

    public function instructions(){
    	return $this->hasMany('App\ExercisesInstructionsModel','exercise_id');
    }
    
}
