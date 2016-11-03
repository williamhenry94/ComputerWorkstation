<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\AreaIssuesModel;
// use App\SolutionsModel;
// use App\TargetComponentModel;


class SymptomsController extends Controller
{
    //
    public function listSymptoms(){
    	$todos=AreaIssuesModel::all();
    	foreach($todos as $todo){
    		$todo->solutions;
    		$todo->target_component;
    	}
    	return $todos;
    }

    public function getSymptom($bodyPart){
    	$body=explode('/', $bodyPart);
    	$todos=AreaIssuesModel::find($body);
    	if(count($todos)>0){
    		foreach($todos as $todo){
	    		$todo->solutions;
	    		$todo->target_component;
	    	}
	    	return $todos[0];
    	}else{
            return response()->json(['message'=>'NOT FOUND'],404);
        }
    }
}
