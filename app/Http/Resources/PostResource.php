<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class PostResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return  [
            "id" => $this->id,
            "title" => $this->title,
            "spanish_title" => $this->spanish_title,
            "url_image" => url($this->url_image),
            "link" => $this->link,
            "date" => $this->date,
            "created_at" => $this->created_at,
            "updated_at" => $this->updated_at,
        ];
    }
}
