<?php

namespace App\Mixins;

use Closure;
use Illuminate\Database\Eloquent\Builder;

/** @mixin Builder */
class BuilderMixin
{
    /**
     * @return Closure
     */
    public function pagination(): Closure
    {
        return function () {
            return $this->paginate(request()->get('limit', 15));
        };
    }
}
