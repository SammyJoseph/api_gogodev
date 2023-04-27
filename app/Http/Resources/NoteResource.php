<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class NoteResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        // return parent::toArray($request); // retorna todos los campos de la tabla

        return [
            'id' => $this->id,
            'title'         => 'Título: ' . $this->title,
            'description'   => $this->description,
            'example'       => 'Este es un ejemplo',
        ];
    }
}
