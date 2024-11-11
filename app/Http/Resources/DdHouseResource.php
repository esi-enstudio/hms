<?php

namespace App\Http\Resources;

use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class DdHouseResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'code' => $this->code,
            'name' => $this->name,
            'created' => Carbon::parse($this->created_at)->toDayDateTimeString(),
            'updated' => Carbon::parse($this->updated_at)->toDayDateTimeString(),
        ];
    }
}
