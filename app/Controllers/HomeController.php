<?php

namespace App\Controllers;

use Adept\Application\Controller;

class HomeController extends Controller
{
    /**
     * @return mixed
     * @throws \Jshannon63\Cobalt\ContainerException
     * @throws \Jshannon63\Cobalt\NotFoundException
     */
    public function index()
    {
        return view('home.php', [
            'appname' => env('APP_NAME'),
            'version' => env('APP_VERSION'),
            'author' => 'Jim Shannon',
            'twitter' => '@jshannon63'
        ]);
    }

    /**
     * @param $name
     * @return mixed
     * @throws \Jshannon63\Cobalt\ContainerException
     * @throws \Jshannon63\Cobalt\NotFoundException
     */
    public function show($name)
    {
        return view('home.php', [
            'appname' => env('APP_NAME'),
            'version' => env('APP_VERSION'),
            'author' => $name,
            'twitter' => '@jshannon63'
        ]);
    }
}
