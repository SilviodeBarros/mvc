<?php

namespace App\Controller;

final class InicialController {

    public static function index() : void 
    {
        include VIEWS . '/inicial/home.php';
    }
}