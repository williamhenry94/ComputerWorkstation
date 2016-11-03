<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ExercisesInstructionsModel extends Model
{
    //
    protected $table="exercises_instrutions";
    public $timestamps=false;
    public $incrementing=false;

    protected $hidden=['exercise_id'];
}
