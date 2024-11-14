<?php

namespace App\Http\Resources;

use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class UserResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id'        => $this->id,
            'avatar'    => $this->avatar,
            'name'      => $this->name,
            'email'     => $this->email,
            'phone'     => $this->phone,
            'role'      => $this->role,
            'status'    => $this->status,
            'email_verified_at'   => Carbon::parse($this->email_verified_at)->toDayDateTimeString(),
            'disabled_at'   => Carbon::parse($this->disabled_at)->toDayDateTimeString(),
            'created_at'   => Carbon::parse($this->created_at)->toDayDateTimeString(),
            'updated_at'   => Carbon::parse($this->updated_at)->toDayDateTimeString(),
        ];
    }
}
