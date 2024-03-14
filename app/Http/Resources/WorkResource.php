<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class WorkResource extends JsonResource
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
            "logo" => $this->logo == null ? null : url($this->logo),
            "business" => $this->business,
            'profession' => new ProfessionResource($this->profession),
            "description" => $this->description,
            "spanish_description" => $this->spanish_description,
            "certificate_url" => $this->certificate_url == null ? null :  url($this->certificate_url),
            'topics' => $this->topics()->pluck('name')->toArray(),
            'topics_spanish' => $this->topics()->pluck('spanish_name')->toArray(),
            "start_date" => $this->start_date,
            "end_date" => $this->end_date
        ];
    }
}
