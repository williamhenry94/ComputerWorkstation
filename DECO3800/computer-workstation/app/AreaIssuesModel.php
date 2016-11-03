<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AreaIssuesModel extends Model
{
    //
    protected $table="area_issues";
    public $incrementing=false;
    public $timestamps=false;
    protected $primaryKey="body_part";

    public  function target_component(){
    	return $this->hasMany('App\TargetComponentModel','body_part');
    }

    public  function solutions(){
    	return $this->hasMany('App\SolutionsModel','body_part');
    }
}
