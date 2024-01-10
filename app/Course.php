<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    protected $table = 'courses';
    
    public function course_requirements()
    {
      return $this->hasMany(CourseRequirement::class,'course_id','id')->selection();
    }
    public function course_subtitle()
    {
      return $this->hasMany(SubTitle::class,'course_id','id')->selection();
    }
    public function categories() {
        return $this->belongsTo(Category::class,"category_id","id")->selection();
    }
    public function course_instructor() {
        return $this->belongsTo(Instructor::class,"user_id","id")->selection();
    }
    public function scopeSelection($query)
    {
        return $query->select(
        	'id',
            'user_id',
            'category_id',
        	'title_' . app()->getLocale() . ' as title',
            'description_' . app()->getLocale() . ' as description',
            'date',
            'time',
            'duration',
            'language',
            'payed',
            'price',
            'image',
            'video',
            'meeting_url'
            

        );
    }
}
