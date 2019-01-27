<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class AccountOverview extends JsonResource
{
    public function toArray($request)
    {
        return [ 'id' => $this->id, 'cb' => $this->combat_level, 'title' => $this->title, 'information' => $this->information, 'price' => $this->price];
    }
}
