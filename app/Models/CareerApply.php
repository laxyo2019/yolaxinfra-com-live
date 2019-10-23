<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CareerApply extends Model
{
    protected $fillable = ['site_key','job_id','name','email','mobileno','file','doc_url'];
}
