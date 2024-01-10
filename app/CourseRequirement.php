<?php
namespace App;
use Illuminate\Database\Eloquent\Model;

class CourseRequirement extends Model
{
    protected $table = 'course_requirements';
    public function courses() {
        return $this->belongsTo(Course::class,"course_id","id")->selection();
    }
    public function scopeSelection($query)
    {
        return $query->select(
        	'id',
            'course_id',
        	'name_' . app()->getLocale() . ' as name',
        );
    }
}
