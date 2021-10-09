<?php

namespace App\Models;

use Eloquent;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;

/**
 * App\Models\Record
 *
 * @property int         $id
 * @property array       $params
 * @property array       $result
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @method static Builder|Record newModelQuery()
 * @method static Builder|Record newQuery()
 * @method static Builder|Record query()
 * @method static Builder|Record whereCreatedAt($value)
 * @method static Builder|Record whereId($value)
 * @method static Builder|Record whereParams($value)
 * @method static Builder|Record whereResult($value)
 * @method static Builder|Record whereUpdatedAt($value)
 * @mixin Eloquent
 */
class Record extends Model
{
    use HasFactory;

    protected $casts = [
        'params' => 'array',
        'result' => 'array'
    ];
}
