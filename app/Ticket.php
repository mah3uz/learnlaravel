<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ticket extends Model
{
    //Tickets Model
    // public function user(){
    // 	return $this->belongsTo('App/User');
    // }

    // public function getTitle(){
    // 	return $this->title();
    // }
    protected $fillable = ['title', 'content', 'slug', 'status', 'user_id'];
}