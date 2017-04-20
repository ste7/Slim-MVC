<?php

namespace App\Controllers;

use \Slim\Views\Twig as View;


class Controller
{
    protected $_view;

    public function __construct(View $view){
        $this->_view = $view;
    }
}