<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
// use App\ExercisesInstructionsModel;
use App\ExercisesModel;
use App\AreaIssuesExercisesModel;


class ExerciseController extends Controller
{
    //
	public function listExercises(){
		$todos=ExercisesModel::all();
		foreach($todos as $todo){
			$todo->instructions;
			$todo->target_body_part;
		}
		return $todos;
	}

	public function getExercise($exercise_id){
		$id=explode('/',$exercise_id);
		$todos=ExercisesModel::find($id);
		if(count($todos)>0){
			foreach($todos as $todo){
				$todo->instructions;
				$todo->target_body_part;
			}
			return $todos;
		}else{
			return response()->json(['message'=>'NOT FOUND'],404);
		}
	}

	public function getExerciseFromPart($target_body_part){
		$body_part=explode('/',$target_body_part);
		$todos=AreaIssuesExercisesModel::where('body_part','=',$body_part)->get();
		// print_r($todos);
		if(count($todos)>0){
			foreach ($todos as $todo ) {
				# code...
				$xs=$todo->exercises;
				// 
				foreach($xs as $x){
					$x->instructions;
				}
				
			}
			return $todos;
		}else{
			return response()->json(['message'=>'NOT FOUND'],404);
		}
	}



}
