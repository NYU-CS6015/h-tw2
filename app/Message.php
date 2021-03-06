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
    	return $this->belongsTo('App\User');
    }

    public function location(){
    	return $this->belongsTo('App\Location');
    }

}
