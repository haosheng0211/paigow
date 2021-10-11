<?php

namespace App\Http\Controllers;

use App\Exports\ComposesExport;
use App\Http\Requests\ComposesRequest as Request;
use App\Http\Resources\ComposesResource;
use App\Http\Resources\PaginateCollection;
use App\Imports\ComposesImport;
use App\Models\Compose;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Storage;

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

        if (!is_null($cards = $request->get('cards'))) {
            $composes->whereJsonContains('cards', (int) $cards);
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

    /**
     * @return JsonResponse
     */
    public function export(): JsonResponse
    {
        $export = new ComposesExport();

        if (!$export->store($filename = 'exports/composes.xlsx')) {
            return $this->responseWithError('導出失敗', 400);
        }

        return $this->response([
            'url' => Storage::url($filename)
        ]);
    }

    /**
     * @param  Request  $request
     *
     * @return JsonResponse
     */
    public function import(Request $request): JsonResponse
    {
        if (!$filename = $request->file('file')->store('imports')) {
            return $this->responseWithError('導入失敗', 400);
        }
        $import = new ComposesImport();
        $import->import($filename);
        return $this->response(['message' => '導入成功']);
    }
}
