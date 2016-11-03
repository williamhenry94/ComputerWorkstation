<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UsersModel extends Model
{
    //
    protected $table="users";
    protected $primaryKey="personel_id";
    public $timestamps=false;
    public $incrementing=false;
    protected $fillable=["email","personel_id"];


}
