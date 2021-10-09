<?php

namespace App\Providers;

use App\Mixins\BuilderMixin;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\ServiceProvider;

class MixinServiceProvider extends ServiceProvider
{
    public function register()
    {
        Builder::mixin(new BuilderMixin());

    }
}
