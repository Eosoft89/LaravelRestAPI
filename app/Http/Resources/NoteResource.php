<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class NoteResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        // Sirve para hacer un return personalizado de una API
        return [
            'id' => $this->id,
            'title' => 'Title: ' . $this->title,
            'content' => $this->content,
            'example' => 'This is un ejemplo'
        ];
       // return parent::toArray($request);
    }
}
