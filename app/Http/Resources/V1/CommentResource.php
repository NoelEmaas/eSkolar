<?php

namespace App\Http\Resources\V1;

use Illuminate\Http\Resources\Json\JsonResource;

use App\Http\Resources\V1\UserResource;
use DateTime;

class CommentResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        $created_at = new DateTime($this->created_at);
        $formatted_date = $created_at->format('M j, Y');
        return [
            'id' => $this->id,
            'user' => new UserResource($this->user),
            'comment' => $this->comment,
            'created_at' => $formatted_date,
        ];
    }
}
