<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
	//Table name
    protected $table='posts'; //can change default values from here
    //Primary Key
    public $primaryKey='id';
    //Timestamps
    public $timestamps=true;

    public function user(){
    	return $this->belongsTo('App\User','user_id'); //Get the user that owns the post     user_id is foreign key of Post model Note that belongsto is inverse relationship of one to many
    }
}
