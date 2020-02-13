<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Exam extends Model
{
    protected $guarded = ['id'];

    public function examkeys(){
        return $this->hasMany(ExamKey::class);
    }

    public function examsubjects(){
        return $this->hasMany(ExamSubject::class);
    }

    public function examanswers(){
        return $this->hasMany(ExamAnswer::class);
    }

    public function examresults(){
        return $this->hasMany(ExamResult::class);
    }


}
