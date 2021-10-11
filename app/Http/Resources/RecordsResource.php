<?php

namespace App\Http\Resources;

use App\Models\Record;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

/** @mixin Record */
class RecordsResource extends JsonResource
{
    /**
     * @param  Request  $request
     *
     * @return array
     */
    public function toArray($request)
    {
        return [
            'id'            => $this->id,
            'cards'         => $this->cards,
            'location'      => $this->location,
            'response'      => $this->response,
            'error'         => $this->error,
            'error_message' => $this->error_message,
            'ip_address'    => $this->ip_address,
            'created_at'    => $this->created_at->toDateTimeString(),
        ];
    }
}
