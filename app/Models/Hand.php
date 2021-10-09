<?php

namespace App\Models;

use Eloquent;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Hand
 *
 * @property int   $id
 * @property int   $patterns_id
 * @property array $cards
 * @property int   $order
 * @method static Builder|Hand newModelQuery()
 * @method static Builder|Hand newQuery()
 * @method static Builder|Hand query()
 * @method static Builder|Hand whereCards($value)
 * @method static Builder|Hand whereId($value)
 * @method static Builder|Hand whereOrder($value)
 * @method static Builder|Hand wherePatternsId($value)
 * @mixin Eloquent
 */
class Hand extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $casts = [
        'cards' => 'array'
    ];
}
