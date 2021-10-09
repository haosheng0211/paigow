<?php

namespace App\Models;

use Eloquent;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Support\Carbon;

/**
 * App\Models\Patterns
 *
 * @property int                    $id
 * @property string                 $label
 * @property Carbon|null            $created_at
 * @property Carbon|null            $updated_at
 * @property-read Collection|Hand[] $hands
 * @property-read int|null          $hands_count
 * @method static Builder|Patterns newModelQuery()
 * @method static Builder|Patterns newQuery()
 * @method static Builder|Patterns query()
 * @method static Builder|Patterns whereCreatedAt($value)
 * @method static Builder|Patterns whereId($value)
 * @method static Builder|Patterns whereLabel($value)
 * @method static Builder|Patterns whereUpdatedAt($value)
 * @mixin Eloquent
 */
class Patterns extends Model
{
    use HasFactory;

    /**
     * @return HasMany
     */
    public function hands(): HasMany
    {
        return $this->hasMany(Hand::class);
    }
}
