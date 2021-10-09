<?php

namespace App\Http\Controllers;

use App\Http\Requests\ComposesRequest as Request;
use App\Http\Resources\ComposesResource;
use App\Http\Resources\PaginateCollection;
use App\Models\Compose;
use Illuminate\Http\JsonResponse;

class ComposesController extends Controller
{
    /**
     * @param  Request  $request
     *
     * @return JsonResponse
     */
    public function index(Request $request): JsonResponse
    {
        $composes = Compose::query();
        $composes->where('pairs', $request->get('pairs', 0));

        if (!is_null($order = $request->get('order')) && count($order = explode(',', $order)) === 2) {
            $composes->orderBy($order[0], $order[1]);
        }

        if (!is_null($card = $request->get('card'))) {
            $composes->whereJsonContains('cards', (int) $card);
        }

        return $this->response(new PaginateCollection($composes->pagination(), ComposesResource::class));
    }

    /**
     * @param  Request  $request
     * @param  Compose  $compose
     *
     * @return JsonResponse
     */
    public function update(Request $request, Compose $compose): JsonResponse
    {
        $compose->order = $request->get('order');
        $compose->score_south = $request->get('score_south');
        $compose->score_north = $request->get('score_north');
        $compose->save();

        return $this->response(['message' => '更新成功']);
    }
}
