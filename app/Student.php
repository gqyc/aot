<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    //protected $fillable = ['first_name','last_name','born_year','born_month','grade','school'];
    protected $guarded = ['id'];

    public function user(){
        return $this->belongsTo(User::Class);
    }

    public function examanswers(){
        return $this->hasMany(ExamAnswer::class);
    }

    public function examresults(){
        return $this->hasMany(ExamResult::class);
    }

}
