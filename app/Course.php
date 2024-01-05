<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    protected $table = 'courses';
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
            'meeting_url'
            

        );
    }
}
