<?php

namespace App\Controllers;

/**
 * @copyright (c) 2022, Junior Silva
 */
class Home
{
    private $dados;

    public function index()
    {
        $loadView = new \Core\ConfigView("Views/Include/Include", $this->dados);
        $loadView->renderizar();
    }
}
