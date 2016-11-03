<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AreaIssuesExercisesModel extends Model
{
    //
    protected $table="area_issues_exercises";
    public $timestamps=false;
    public $incrementing=false;
    protected $primaryKey="exercise_id";

    protected $hidden=['exercise_id'];

    public function exercises(){
    	return $this->hasMany('App\ExercisesModel','exercise_id');
    }
}
