<?php

namespace App\Http\Controllers;

use App\Http\Requests\ComputeRequest as Request;
use App\Models\Patterns;
use App\Models\Record;
use App\Services\ComputeService;

class ComputeController extends Controller
{
    public function __invoke(Request $request)
    {
        $record = new Record();
        $record->cards = $request->get('cards');
        $record->location = $request->get('location');
        $record->response = Patterns::all()->map(function (Patterns $pattern) use ($record) {
            $service = new ComputeService($pattern, $record->cards, $record->location);
            return $service();
        })->all();
        $record->ip_address = $request->ip();
        $record->save();
        return $this->response($record->response);
    }
}
