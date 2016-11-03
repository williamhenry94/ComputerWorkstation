<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\ToolsModel;
use App\GuideModel;

class ToolsController extends Controller
{
    //
    public function listCategory(){
        $todos=ToolsModel::all();
        return $todos;
    }
    
//     public function listItems($category){
//         $cat=explode('/',$category);
// //        print_r($cat);
//         $todos=ToolsCategoryModel::find(strtolower($cat[0]));
//         if(count($todos)>0){
//             $todo=$todos->tools;
//             foreach($todo as $xs){
//                 // echo($xs);
//                 $x=$xs->adjustment;
//                 // foreach($x as $x1){
//                 //     $x2=$x1->guide;
//                 // }

//             }
//             return $todos;
//         }else{
//             return response(['message'=>'NOT FOUND'],404);
//         }
        
//     }
    
    // public function listAdjustments($tool,$category){
    //     $toolName=strtolower(explode('/', $tool)[0]);
    //     $cat=strtolower(explode('/', $category)[0]);
    //     echo($cat.' '. $toolName);
    //     $todos=ToolsModel::where('tool_name','=','laptop')
    //                         ->where('tool_category','=','computer')
    //                         ->get();
    //     if(count($todos)>0){
    //         $x=$todos->adjustment;
    //         return $todos;
    //     }else{
    //         return response(['message'=>'NOT FOUND'],404);
    //     }



        
    // }
    
    // public function getAdjustment(Request $request){
    //     $toolName=strtolower($request->input('tools'));
    //     $toolCategory=strtolower($request->input('category'));
     
        
    //     $todos=ToolsAdjustmentModel::where('tool_name','=',$toolName)
    //                                 ->where('tool_category','=',$toolCategory)
    //                                 ->get();
        
    //     if(count($todos)>0){
    //         return $todos;
    //     }else{
    //         return response(['message'=>'NOT FOUND'],404);
    //     }
        
        
    // }

    public function getGuidePicture($id,$adj_id){
        $id=explode('/',$id);
        $adj_id=explode('/', $adj_id);
        $todos=GuideModel::where('guide_id','=',$id[0])
                        ->where('question_id','=',$adj_id);
        if(count($todos->get())>0){
            // return $todos;
            $path=$todos->pluck('file_path')[0];
            $filename= $todos->pluck('file_name')[0];
            return  response()->download(public_path().$path, $filename, ['Content-Type'=>'image/png']);

        }else{
            return response(['message'=>'NOT FOUND'],404);
        }

    }

    public function getGuides($id){
        $id=explode('/',$id);
        
        $todos=GuideModel::where('question_id','=',$id[0])->get();
        if(count($todos)>0){
            
            return $todos;
        }else{
            return response(['message'=>'NOT FOUND'],404);
        }
    }
}
