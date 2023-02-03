<?php

namespace Src;

class Kernel
{
    public function boot()
    {
        $routes = Route::getList();
        $url = $_SERVER['REQUEST_URI'];
        if (array_key_exists($url, $routes)) {
            $controller = new $routes[$url]['args'][0];
            return call_user_func([$controller, $routes[$url]['args'][1]]);
        } else {
            http_response_code(404);
            echo 'route 404 not found';
        }

    }

//    public function typeOfRequest($method)
//    {
//        if ($method === 'GET') {
//            $this->boot();
//            echo 'Get';
//        } elseif ($method === 'POST') {
//            $this->boot();
//            echo 'POST';
//        } else {
//            echo 'error';
//        }
//
//    }
}