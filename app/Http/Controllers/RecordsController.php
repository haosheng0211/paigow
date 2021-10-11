<?php

namespace App\Http\Controllers;

use App\Http\Resources\PaginateCollection;
use App\Http\Resources\RecordsResource;
use App\Models\Record;
use Illuminate\Http\JsonResponse;

class RecordsController extends Controller
{
    public function index(): JsonResponse
    {
        $records = Record::query()->orderByDesc('created_at');

        return $this->response(new PaginateCollection($records->pagination(), RecordsResource::class));
    }
}
