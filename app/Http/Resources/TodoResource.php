<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class TodoResource extends JsonResource
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
            'title' => $this->title,
            'type_id' => $this->type_id,
            'status_id' => $this->status_id,
            'description' => $this->description,
            'date' => $this->date,
            'created_at' => $this->created_at,
            'update_at' => $this->update_at,
            'deleted_at' => $this->deleted_at,
        ];
    }
}
