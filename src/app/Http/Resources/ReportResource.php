<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ReportResource extends JsonResource
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
            'name' => $this->name,
            'title' => $this->title,
            'no_document' => $this->no_document,
            'deskripsi' => $this->deskripsi,
            'status' => $this->status,
            'department' => $this->department,
            'uri' => $this->uri,
            'created_at' => $this->created_at,
            'verified_by' => $this->verified_by
        ];
    }
}
