<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class CourseResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        // return parent::toArray($request);
        return [
            'id'=>$this->id,
            'user_id'=>$this->user_id,
            'category_id'=>$this->category_id,
            'title'=>$this->title,
            'description_'=>$this->description,
            'date'=>$this->date,
            'time'=>$this->time,
            'duration'=>$this->duration,
            'language'=>$this->language,
            'payed'=>$this->payed,
            'price'=>$this->price,
            'image'=>request()->getHttpHost()."/img/courses/".$this->image,
            'video'=>request()->getHttpHost()."/img/courses/video/".$this->video,
            'meeting_url'=>$this->meeting_url
        ];
    }
}
