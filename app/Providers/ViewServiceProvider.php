<?php

namespace App\Providers;

use Adept\Application\ServiceProvider;
use Adept\View\ViewInterface;
use Adept\View\View;

class ViewServiceProvider extends ServiceProvider
{
    /**
     *
     * @return void
     */
    public function boot()
    {
    }


    /**
     * @throws \Jshannon63\Cobalt\ContainerException
     * @throws \Jshannon63\Cobalt\NotFoundException
     */
    public function register()
    {
        app()->make(ViewInterface::class, function () {
            return new View(app(), config('view'));
        }, true);
        app()->alias('view', ViewInterface::class);
    }
}
