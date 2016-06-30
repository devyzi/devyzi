<?php

namespace App\Controllers;

use Yzi\Controller\Action;
use Yzi\DI\DB;
use Yzi\JSON\JSON;

class WelcomeController extends Action
{
    public function show()
    {
        $this->render("welcome"); //Renderiza a view home
    }
}