<?php

namespace App\Models;

use Eloquent;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;

/**
 * App\Models\Card
 *
 * @property int         $id
 * @property string      $label
 * @property string      $image
 * @property int         $cards_count
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @method static Builder|Card newModelQuery()
 * @method static Builder|Card newQuery()
 * @method static Builder|Card query()
 * @method static Builder|Card whereCardsCount($value)
 * @method static Builder|Card whereCreatedAt($value)
 * @method static Builder|Card whereId($value)
 * @method static Builder|Card whereImage($value)
 * @method static Builder|Card whereLabel($value)
 * @method static Builder|Card whereUpdatedAt($value)
 * @mixin Eloquent
 */
class Card extends Model
{
    use HasFactory;
}
