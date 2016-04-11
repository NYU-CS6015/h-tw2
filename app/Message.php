<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    //
    protected $fillable = [
        'user_id', 'location_id', 'content','likes'
    ];

    public function user(){
    	this->belongsTo('App\User');
    }

    public function location(){
    	this->belongsTo('App\Location');
    }

}
