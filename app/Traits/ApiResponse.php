<?php

namespace App\Traits;

use Closure;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Cache;

trait ApiResponse
{
    /**
     * @param  mixed  $data
     *
     * @return JsonResponse
     */
    public function response($data): JsonResponse
    {
        return response()->json($data);
    }

    /**
     * @param  Closure  $callback
     *
     * @return JsonResponse
     */
    public function responseWithCache(Closure $callback): JsonResponse
    {
        return response()->json(Cache::remember(md5(request()->getRequestUri()), 3600, $callback));
    }

    /**
     * @param  string  $message
     * @param  int     $code
     *
     * @return JsonResponse
     */
    public function responseWithError(string $message, int $code): JsonResponse
    {
        return response()->json(['message' => $message])->setStatusCode($code);
    }
}