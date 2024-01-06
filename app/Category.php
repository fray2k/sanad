<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
// use Spatie\Translatable\HasTranslations;
class Category extends Model
{
    public function scopeSelection($query)
    {
        return $query->select(
        	'id',
        	'title_' . app()->getLocale() . ' as title'
        );
    }
    // use HasTranslations;
    // public $translatable = ['title'];

    // public function subCategories()
    // {
    //   return $this->hasMany(SubCategory::class,'categoryId','id');
    // }
    // public function subCategories(){
    //     return $this->hasMany(SubCategory::class);
    // }
}
