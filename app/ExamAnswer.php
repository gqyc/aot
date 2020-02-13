<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ExamAnswer extends Model
{
    protected $guarded = ['id'];

    public function examkey(){
        return $this->belongsTo(ExamKey::Class);
    }

    public function student(){
        return $this->belongsTo(Student::Class);
    }


}
