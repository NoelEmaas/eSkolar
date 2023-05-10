<?php

namespace App\Http\Resources\V1;

use Illuminate\Http\Resources\Json\JsonResource;

use DateTime;

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
        $createdAt = new DateTime($this->created_at);
        $formattedDate = $createdAt->format('M j, Y');

        return [
            'id' => $this->id,
            'user' => $this->user,
            'title' => $this->title,
            'description' => $this->description,
            'commentCount' => $this->comment_count,
            'likeCount' => $this->like_count,
            'created_at' => $formattedDate
        ];
    }
}
