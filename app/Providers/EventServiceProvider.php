<?php

namespace App\Providers;

use Adept\Application\ServiceProvider;
use Adept\Event\EventManagerInterface;

class EventServiceProvider extends ServiceProvider
{
    protected $bindings;

    /**
     * @throws \Jshannon63\Cobalt\ContainerException
     * @throws \Jshannon63\Cobalt\NotFoundException
     */
    public function boot()
    {
        foreach ($this->bindings as $event => $listeners) {
            foreach ($listeners as $listener) {
                app(EventManagerInterface::class)->subscribe(app(strtolower('app.events.'.$event)), app(strtolower('app.listeners.'.$listener)));
            }
        }
    }


    public function register()
    {
        $this->bindings = [
            'ExampleEvent' => [
                'ExampleListener'
            ]
        ];
    }
}
