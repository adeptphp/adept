<?php

require __DIR__.'/../vendor/autoload.php';

(new \Adept\Application\Application(realpath(__DIR__.'/../')))->run();

//app()->eventmanager()->trigger('app.events.exampleevent');

dd(app());
