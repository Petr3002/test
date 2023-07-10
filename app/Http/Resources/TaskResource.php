<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class TaskResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        $v = (object)$this->resource;

        return [
            'id' => $v->id ?? null,
            'title' => $v->title ?? null,
            'text' => $v->text ?? null,
            'created_at' => $v->created_at ?? null,
            'updated_at' => $v->updated_at ?? null,
        ];
    }
}
