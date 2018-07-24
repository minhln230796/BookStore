<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rate extends Model
{
    protected $guarded = ['id'];
    
    public function book()
    {
    	return $this->belongsTo('App\Book');
    }

    public function user()
    {
    	return $this->belongsTo('App\User');
    }
}
