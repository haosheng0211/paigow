<?php

namespace App\Http\Controllers;

use App\Models\Card;
use Illuminate\Http\JsonResponse;

class CardsController extends Controller
{
    /**
     * @return JsonResponse
     */
    public function options(): JsonResponse
    {
        $cards = Card::all();

        $cards = $cards->map(function (Card $card) {
            return [
                'text'  => $card->label,
                'value' => $card->id
            ];
        })->toArray();

        return $this->response($cards);
    }
}
