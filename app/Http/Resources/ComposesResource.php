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
            'score_south' => number_format($this->score_south,3),
            'score_north' => number_format($this->score_north,3),
        ];
    }
}
