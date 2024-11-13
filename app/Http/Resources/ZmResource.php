<?php

namespace App\Http\Resources;

use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Support\Str;

class ZmResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'user' => new UserResource($this->user),
            'name' => $this->name,
            'number' => $this->number,
            'designation' => Str::upper($this->designation),
            'created' => Carbon::parse($this->created_at)->toDayDateTimeString(),
            'updated' => Carbon::parse($this->updated_at)->toDayDateTimeString(),
        ];
    }
}
