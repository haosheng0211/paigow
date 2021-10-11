<?php

namespace App\Models;

use Eloquent;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Arr;

/**
 * App\Models\Compose
 *
 * @property int         $id
 * @property string|null $label
 * @property array       $cards
 * @property int         $pairs
 * @property int         $order
 * @property float       $score_south
 * @property float       $score_north
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

    protected $fillable = [
        'id',
        'order',
        'score_north',
        'score_south'
    ];

    public $casts = [
        'cards'       => 'array',
        'score_north' => 'float',
        'score_south' => 'float',
    ];

    public static function analyze(array $values, $location = 'north'): ?array
    {
        $values = Arr::sort($values);

        $composes = self::select(['label', 'cards', "score_{$location}"])
            ->orderBy("score_{$location}", 'desc')
            ->orderBy('order')
            ->get();

        $composes = $composes->map(function (Compose $compose) use (&$values, $location) {
            if (count($cards = array_intersect($values, $compose->cards)) !== 2) {
                return null;
            }

            foreach ($cards as $key => $val) {
                unset($values[$key]);
            }

            return $compose;
        })->toArray();

        return array_values(array_filter($composes));
    }
}
