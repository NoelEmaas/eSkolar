<?php

namespace App\Http\Resources\V1;

use Illuminate\Http\Resources\Json\JsonResource;

use App\Http\Resources\V1\UserResource; 
use App\Http\Resources\V1\CommentCollection;

class ScholarshipResource extends JsonResource
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
            'user' => new UserResource($this->user),
            'benefactor' => $this->benefactor,
            'program' => $this->program,
            'description' => $this->description,
            'amount_min' => $this->amount_min,
            'amount_max' => $this->amount_max,
            'comments' => new CommentCollection($this->comments),
            'comment_count' => $this->comment_count,
            'like_count' => $this->like_count,
            'created_at' => $this->created_at
        ];
    }
}
