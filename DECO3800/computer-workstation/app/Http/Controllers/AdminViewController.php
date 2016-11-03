<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\AnswerFormModel;
use App\AnswersModel;
// use App\UsersModel;

class AdminViewController extends Controller
{
	public function view(Request $request){
	    //

	    $data=$request->input('query');
	    
	    $todos=AnswerFormModel::where('user_id','like','%'.$data.'%')->get();
	    foreach ($todos as $todo ) {
	    	# code...
	    	$todo->user;
	    }
	    return $todos;
	}

	public function getDetailedView($answer_id){
		$data=explode('/', $answer_id);
		$todos=AnswersModel::where("answer_id","=",$data)->get();
		if(count($todos)>0){
			foreach ($todos as $todo ) {
				# code...
				$todo->question;
			}
			return $todos;
		}else{
			return response()->json(['message'=>'NOT FOUND'],404);
		}
	}


}
