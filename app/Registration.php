<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Registration extends Model
{
    public function educations(){

    	return $this->hasMany(Education::class,'applicant_id');
    }
}
