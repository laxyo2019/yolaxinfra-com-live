<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Job extends Model
{
	protected $fillable = [];

    protected $table = "job_posts";

    public function replies()
	{
		return $this->hasMany('App\Models\JobReply');
	}
}
