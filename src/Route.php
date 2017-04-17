<?php

namespace App;

use Cake\Routing\RouteBuilder;
use Cake\Routing\Router;

class Route
{
    protected $route;

    function __construct()
    {
        Router::scope('/', function (RouteBuilder $routes) {

            $this->route = $routes;
        });
    }

    function get(String $path, String $controller, String $method){

        $this->route->connect($path, [
            'controller' => $controller,
            'action' => $method ,
            '_method' => 'GET'
        ]);

    }

    function post(String $path, String $controller, String $method){

        $this->route->connect($path, [
            'controller' => $controller,
            'action' => $method ,
            '_method' => 'POST'
        ]);

    }

    function put(String $path, String $controller, String $method){

        $this->route->connect($path, [
            'controller' => $controller,
            'action' => $method ,
            '_method' => 'PUT'
        ]);

    }

    function delete(String $path, String $controller, String $method){

        $this->route->connect($path, [
            'controller' => $controller,
            'action' => $method ,
            '_method' => 'DELETE'
        ]);

    }


}
