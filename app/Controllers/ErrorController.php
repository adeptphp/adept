<?php

namespace App\Controllers;

use Adept\Application\Controller;

class ErrorController extends Controller
{
    /**
     * @return mixed
     * @throws \Jshannon63\Cobalt\ContainerException
     * @throws \Jshannon63\Cobalt\NotFoundException
     */
    public function error404()
    {
        return view('Error/404.php');
    }
}
