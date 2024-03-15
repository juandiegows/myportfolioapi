<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ImageResource extends JsonResource
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
            'name' => $this->name,
            'name_spanish' => $this->name_spanish,
            'link' => url($this->link),
            'link_900' => url($this->link_900),
            'link_700' =>  url($this->link_700),
            'link_300' =>  url($this->link_300),
        ];
    }
}
