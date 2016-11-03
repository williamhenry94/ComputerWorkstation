<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ToolsModel extends Model
{
    //
    protected $table = 'tools';
    public $incrementing=false;
    public $timestamps=false;
    protected $primaryKey='tool_name';
    
    
    // 
}
