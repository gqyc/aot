<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ExamKey extends Model
{
    //protected $fillable = ['first_name','last_name','born_year','born_month','grade','school'];
    protected $guarded = ['id'];

    public function exam(){
        return $this->belongsTo(Exam::Class);
    }

    public function examanswers(){
        return $this->hasMany(ExamAnswer::class);
    }

}
