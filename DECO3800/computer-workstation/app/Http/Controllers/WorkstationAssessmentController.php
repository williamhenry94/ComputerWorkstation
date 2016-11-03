<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
// use App\AssessmentQuestionModel;
use App\QuestionsModel;
use App\UsersModel;
use App\AnswersModel;
use App\AnswerFormModel;
use Validator;
use PDF;

class WorkstationAssessmentController extends Controller
{
    //

    public function getQuestions(){
    	$todos=QuestionsModel::all();
    	foreach($todos as $todo){
    		$todo->tools;
    	}
    	
    	return $todos;
    }

    public function addUser(Request $request){
        $data=$request->all();
        $validator = Validator::make($request->all(), [
            'user_id' => 'required',
            'email' => 'required|email',
            // 'location'=>'required'
        ]);
        if(!$validator->fails()){
            $todos=UsersModel::find($data['user_id']);
            $answer_id=uniqid('',true);
            if(count($todos)==0){
                
                UsersModel::create([
                    'personel_id'=>$data['user_id'],
                    'email'=>$data['email']
                    ]);
                AnswerFormModel::create([
                        'user_id'=>$data['user_id'],
                        'answer_id'=>$answer_id,
                        'location'=>'NULL',
                        'help'=>false
                        ]);
            }else{
                
                $email=$todos->email;
                if($email!==$data['email']){
                    $todos->email=$data['email'];
                    $todos->save();
                }
                AnswerFormModel::create([
                        'answer_id'=>$answer_id,
                        'user_id'=>$data['user_id'],
                        'location'=>'NULL',
                        'help'=>false
                        ]);

            }
            return response()->json(["message"=>'success','answer_id'=>$answer_id],201);
        }else{
            return response()->json($validator->messages(),400);
        }
    }


    public function add(Request $request){
    	$data=$request->all();
        $validator = Validator::make($request->all(), [
            'user_id' => 'required',
            'answer_id' => 'required',
            'location'=>'required',
            'help'=>'required',
            'answers'=>'required'
        ]);

        if(!$validator->fails()){
        	$todos=AnswerFormModel::where('user_id','=',$data['user_id'])
                                  ->where('answer_id','=',$data['answer_id']);
        	
            if(count($todos->get())==0){
        		return response()->json(["message"=>'NOT FOUND'],404);
        	}else{
        		$todos->update(["location"=>$data['location']]);
                $todos->update(["help"=>$data['help']]);
        		foreach($data["answers"] as $x){
                    
        			AnswersModel::create([
        				'user_id'=>$data['user_id'],
        				'question_id'=>$x["question_id"],
        				'answer'=>$x['answer'],
        				'answer_id'=>$data['answer_id']
        				]);
        		}
        		return response()->json(["message"=>'success'],201);
        	}
        }else{
            return response()->json($validator->messages(),400);
        }
    	
    }

    public function getPDF($answer_id){
        $data=explode('/',$answer_id);
//        $data['a']="<h1>Hello</h1>";
        $todos=AnswersModel::where("answer_id","=",$data)->get();
		if(count($todos)>0){
			foreach ($todos as $todo ) {
				# code...
				$todo->question;
			}
            $answers['datas']=$todos;
            $pdf = PDF::loadView('pdf.answers', $answers);
            return $pdf->download('answers-'.$data[0].'.pdf');
//			return $todos;
		}else{
			return response()->json(['message'=>'NOT FOUND'],404);
		}
//        

    }
}
