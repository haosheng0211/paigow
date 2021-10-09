<?php

namespace App\Models;

use Eloquent;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;

/**
 * App\Models\Hand
 *
 * @property int         $id
 * @property int         $patterns_id
 * @property string      $cards
 * @property int         $order
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @method static Builder|Hand newModelQuery()
 * @method static Builder|Hand newQuery()
 * @method static Builder|Hand query()
 * @method static Builder|Hand whereCards($value)
 * @method static Builder|Hand whereCreatedAt($value)
 * @method static Builder|Hand whereId($value)
 * @method static Builder|Hand whereOrder($value)
 * @method static Builder|Hand wherePatternsId($value)
 * @method static Builder|Hand whereUpdatedAt($value)
 * @mixin Eloquent
 */
class Hand extends Model
{
    use HasFactory;
}
