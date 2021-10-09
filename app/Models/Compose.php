<?php

namespace App\Models;

use Eloquent;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Compose
 *
 * @property int         $id
 * @property string|null $label
 * @property array       $cards
 * @property int         $pairs
 * @property int         $order
 * @property string      $score_south
 * @property string      $score_north
 * @method static Builder|Compose newModelQuery()
 * @method static Builder|Compose newQuery()
 * @method static Builder|Compose query()
 * @method static Builder|Compose whereCards($value)
 * @method static Builder|Compose whereId($value)
 * @method static Builder|Compose whereLabel($value)
 * @method static Builder|Compose whereOrder($value)
 * @method static Builder|Compose wherePairs($value)
 * @method static Builder|Compose whereScoreNorth($value)
 * @method static Builder|Compose whereScoreSouth($value)
 * @mixin Eloquent
 */
class Compose extends Model
{
    use HasFactory;

    public $timestamps = false;

    public $casts = [
        'cards' => 'array'
    ];
}
