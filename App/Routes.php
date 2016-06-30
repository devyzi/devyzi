<?php
namespace App;

use Yzi\Init\Bootstrap;

class Routes extends Bootstrap
{
    protected function initRoutes()
    {
        $route['welcome'] = array('route'=>'/','controller'=>"WelcomeController",'action'=>'show');
        
        $this->setRoutes($route);
    }
}