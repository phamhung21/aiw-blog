<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class News extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'id'=>$this->id,
            'title'=>$this->title,
            'content'=>$this->content,
            'author'=>$this->author,
            'tag'=>$this->tag,
            'comment'=>$this->comment,
            'related_articles'=>$this->related_articles,
        ];
    }
}
