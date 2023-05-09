<?php

namespace App\Http\Resources\V1;

use Illuminate\Http\Resources\Json\JsonResource;

class ForumResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'authorName' => $this->author_name,
            'title' => $this->title,
            'description' => $this->description,
            'commentCount' => $this->comment_count,
            'likeCount' => $this->like_count
        ];
    }
}
