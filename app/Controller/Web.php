<?php

namespace App\Controller;
use League\Plates\Engine;

class Web
{
    private $view;

    public function __construct()
    {
        $this->view = new Engine(__DIR__ . "/../../theme");
    }

    public function home()
    {
        echo $this->view->render("main", [
            "title" => "Home"
        ]);
    }
}