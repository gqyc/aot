<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ExamSubject extends Model
{
    //protected $fillable = ['first_name','last_name','born_year','born_month','grade','school'];
    protected $guarded = ['id'];

    public function exam(){
        return $this->belongsTo(Exam::Class);
    }

    public function examkeys(){
        return $this->hasMany(ExamKey::class);
    }

    public function examresults(){
        return $this->hasMany(ExamResult::class);
    }


}
