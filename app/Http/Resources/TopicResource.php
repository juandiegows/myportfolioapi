<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class TopicResource extends JsonResource
{
    /**
     * Transform the resource collection into an array.
     *
     * @return array<int|string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            "id" => $this->id,
            "name" => $this->name,
            "spanish_name" => $this->spanish_name,
            "link_image" => url($this->link_image),
            "description" => $this->description,
            "spanish_description" => $this->spanish_description,
            "topic_master" => new TopicResource($this->topic),
            "type_topic" => new TypeTopicResource($this->typeTopic->first()),
        ];
    }
}
