<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class EducationResource extends JsonResource
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
            "entity" => $this->business,
            'title' => $this->title,
            'spanish_title' => $this->spanish_title,
            'title_education' => $this->title_education,
            'spanish_title_education' => $this->spanish_title_education,
            "description" => $this->description,
            "spanish_description" => $this->spanish_description,
            "certificate_url" => url($this->certificate_url),
            "start_date" => $this->start_date,
            "end_date" => $this->end_date
        ];
    }
}
