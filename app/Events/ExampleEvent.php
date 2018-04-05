<?php

namespace App\Events;

use Adept\Event\Event;

class ExampleEvent extends Event
{
    protected $message;

    public function __construct()
    {
        $this->data = 'Hello World';
    }

    public function getMessage()
    {
        return $this->data;
    }
}
