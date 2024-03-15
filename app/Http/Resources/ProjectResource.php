<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ProjectResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            "id" => $this->id,
            "client_id" => $this->client_id,
            "principal_project_id" => $this->principal_project_id,
            "front_page" => new ImageResource($this->frontPage),
            "title" => $this->title,
            "spanish_title" => $this->spanish_title,
            "short_description" => $this->short_description,
            "spanish_short_description" => $this->spanish_short_description,
            "description" => $this->description,
            "spanish_description" => $this->spanish_description,
            "view_link" => $this->view_link,
            "download_link" => $this->download_link,
            "video_link" => $this->video_link,
            "date" => $this->date,
            "created_at" => $this->created_at,
            "updated_at" => $this->updated_at
        ];
    }
}
