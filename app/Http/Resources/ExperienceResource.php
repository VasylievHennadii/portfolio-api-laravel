<?php

namespace App\Http\Resources;

use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ExperienceResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'position' => $this->position,
            'short_description' => $this->short_description,
            'date_from' => Carbon::parse($this->date_from)->translatedFormat('F Y'),
            'date_to' => Carbon::parse($this->date_to)->translatedFormat('F Y'),
            'company_name' => $this->company_name,
        ];
    }
}
