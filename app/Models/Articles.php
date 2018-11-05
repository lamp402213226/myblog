<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Articles extends Model
{
    //属于
	public function articlescates()
	{
	    return $this->belongsTo('App\Models\Cates','cid');
	}
}
