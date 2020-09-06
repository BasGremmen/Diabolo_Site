<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\File;

class Activity extends Model
{
    //
    protected $fillable = ['name','user_id','category_id','body','date'];
    protected $dates = ['date'];

    public function files() {
    	return $this->hasMany('App\File');
    }
}
