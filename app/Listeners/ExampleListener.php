<?php

namespace App\Listeners;

use Adept\Event\Listener;
use Adept\Event\Event;

class ExampleListener extends Listener
{
    public function __construct()
    {
        //
    }

    public function handle(Event $event)
    {
        loginfo('Event: '.$event->getName().' has fired! '.$event->getMessage());
    }
}
