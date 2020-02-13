<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ExamResult extends Model
{
    protected $guarded = ['id'];

    public function exam(){
        return $this->belongsTo(Exam::Class);
    }

    public function student(){
        return $this->belongsTo(Student::Class);
    }

    public function examresult(){
        return $this->belongsTo(ExamResult::Class);
    }



}
