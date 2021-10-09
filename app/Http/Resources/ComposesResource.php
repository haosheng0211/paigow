<?php

namespace App\Http\Resources;

use App\Models\Compose;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

/** @mixin Compose */
class ComposesResource extends JsonResource
{
    /**
     * @param  Request  $request
     *
     * @return array
     */
    public function toArray($request): array
    {
        return [
            'id'          => $this->id,
            'label'       => $this->label,
            'cards'       => $this->cards,
            'pairs'       => $this->pairs,
            'order'       => $this->order,
            'score_south' => $this->score_south,
            'score_north' => $this->score_north,
        ];
    }
}
