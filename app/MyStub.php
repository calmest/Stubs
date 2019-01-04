<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MyStub extends Model
{
    /*
    |---------------------------------------------
    | ADD NEW STUB
    |---------------------------------------------
    */
    public function addNewStub($payload){
    	$new_stub 				= new MyStub();
    	$new_stub->user_id 		= $payload->user_id;
    	$new_stub->download_link= $payload->download_link;
    	$new_stub->name 		= $payload->name;
    	$new_stub->image 		= $payload->image;
    	$new_stub->status 		= "active";
    	$new_stub->save();

    	$data = [
    		'status' => 'success',
    		'message' => 'Stub saved!',
    	];

    	
    }
}
