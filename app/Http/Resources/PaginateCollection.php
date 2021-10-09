<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Http\Resources\Json\ResourceCollection;

/**
 * @method currentPage()
 * @method perPage()
 * @method total()
 */
class PaginateCollection extends ResourceCollection
{
    /**
     * @var string|JsonResource
     */
    public $collection_class;

    public function __construct($resource, string $collection_class)
    {
        parent::__construct($resource);
        $this->collection_class = $collection_class;
    }

    /**
     * Transform the resource collection into an array.
     *
     * @param  Request  $request
     *
     * @return array
     */
    public function toArray($request): array
    {
        return [
            'page'  => (int) $this->currentPage(),
            'limit' => (int) $this->perPage(),
            'total' => (int) $this->total(),
            'items' => $this->collection_class::collection($this->collection)
        ];
    }
}
