<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    function article() {
    	return $this->belongsTo('App\Article','article_id','id');
    }

    function owner() {
    	return $this->belongsTo('App\User','user_id','id');
    }
}
