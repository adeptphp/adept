<?php

use Adept\Application\Facades\Router;


Router::add('GET', '/', 'HomeController@index');

Router::add('GET', '/404', 'ErrorController@error404');
Router::add('GET', '/405', 'ErrorController@error405');
Router::add('GET', '/406', 'ErrorController@error406');
Router::add('GET', '/407', 'ErrorController@error407');

Router::add('GET', '/hmmm/{test}', function ($test) {
    echo 'hello '.$test;
});

Router::add('POST', '/hmmm/{test}', function ($test) {
    echo 'hello '.$test;
});

Router::add('POST', '/407', 'ErrorController@error407')->setName('407');

Router::add('GET', '/show/{id}{name}', 'HomeController@show');

Router::group('/api', function () {
    Router::add('GET', '/test', 'HomeController@index');
    Router::add('POST', '/test', 'HomeController@index');
});
