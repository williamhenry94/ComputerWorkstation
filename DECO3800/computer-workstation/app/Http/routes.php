<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

// CORS
// header('Access-Control-Allow-Origin: http://deco3800-generic.uqcloud.net');
// header('Access-Control-Allow-Credentials: true');
// header('Access-Control-Allow-Headers: Content-Type');

Route::get('/', function () {
    return view('welcome');
});


Route::get('api/tools/category',['uses'=>'ToolsController@listCategory','middleware'=>'tools']); //
Route::get('api/body/exercise/{target_body_part}',['uses'=>'ExerciseController@getExerciseFromPart','middleware'=>'tools']);
// Route::get('api/tools/category/{category}',['uses'=>'ToolsController@listItems','middleware'=>'tools']); //
// Route::get('api/adjustment',['uses'=>'ToolsController@getAdjustment','middleware'=>'tools']); //
Route::get('picture/guide/{id}/{adjustment_id}',['uses'=>'ToolsController@getGuidePicture']); //
Route::get('api/guide/{id}',['uses'=>'ToolsController@getGuides','middleware'=>'tools']); //
Route::get('api/symptoms',['uses'=>'SymptomsController@listSymptoms','middleware'=>'tools']); //
Route::get('api/symptom/{bodyPart}',['uses'=>'SymptomsController@getSymptom','middleware'=>'tools']); //
Route::get('api/exercises',['uses'=>'ExerciseController@listExercises','middleware'=>'tools']);//
Route::get('api/exercise/{exercise_id}',['uses'=>'ExerciseController@getExercise','middleware'=>'tools']);//
Route::get('api/checklists',['uses'=>'WorkstationAssessmentController@getQuestions','middleware'=>'tools']); //
Route::post('api/checklists',['uses'=>'WorkstationAssessmentController@add','middleware'=>'tools']); //
Route::post('api/user/checklists',['uses'=>'WorkstationAssessmentController@addUser','middleware'=>'tools']); // 
Route::get('api/view',['uses'=>'AdminViewController@view']); //
Route::get('api/detail/{answer_id}',['uses'=>'AdminViewController@getDetailedView']); //
Route::get('pdf/{answer_id}',['uses'=>'WorkstationAssessmentController@getPDF']);//
// Route::get('api/adjustments/{category}/{tool}',['uses'=>'ToolsController@listAdjustments','middleware'=>'tools'])->where(['category'=>'[A-Za-z]+','tool'=>'[A-Za-z]+']);

