<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class File extends Model
{
    //
    protected $fillable = ['activity_id','filename','filetype'];

    public function activity()
    {
    	return $this->belongsTo('App\Activity');
    }
}
