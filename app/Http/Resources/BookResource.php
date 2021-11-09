<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class BookResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        // return parent::toArray($request);
        return [
            "title" => $this->title,
            "body" => $this->body,
            "created_at" => $this->created_at->format('D, m F Y | H:i:s A'),
            "updated_at" => $this->updated_at->format('D, m F Y | H:i:s A')
        ];
    }
}
