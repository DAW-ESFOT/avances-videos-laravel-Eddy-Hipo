<?php

namespace App\Http\Resources;


use App\Models\Category;
use App\Models\User;
use Illuminate\Http\Resources\Json\JsonResource;

class Article extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'title' => $this->title,
            'body' => $this->body,
            'user' => "/api/users/" . $this->user_id,
            'category' => Category::find($this->category_id),
            // Cambiar category como user en un futuro
            'image' => $this->image,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,

        ];
    }
}
