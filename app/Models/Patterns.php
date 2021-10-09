<?php

namespace App\Models;

use Eloquent;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

/**
 * App\Models\Patterns
 *
 * @property int                    $id
 * @property string                 $label
 * @property-read Collection|Hand[] $hands
 * @property-read int|null          $hands_count
 * @method static Builder|Patterns newModelQuery()
 * @method static Builder|Patterns newQuery()
 * @method static Builder|Patterns query()
 * @method static Builder|Patterns whereId($value)
 * @method static Builder|Patterns whereLabel($value)
 * @mixin Eloquent
 */
class Patterns extends Model
{
    use HasFactory;

    public $timestamps = false;

    /**
     * @return HasMany
     */
    public function hands(): HasMany
    {
        return $this->hasMany(Hand::class);
    }
}
