<?php


namespace App\Routing;

use AltoRouter;

class RouteDispatcher
{
    protected $match;
    protected $controller;
    protected $method;

    public function __construct(AltoRouter $router)
    {
        $this->match = $router->match();
        $this->explodeRoute();
    }

    private function explodeRoute()
    {
        if($this->match)
        {
            list($controller, $method) = explode('@', $this->match['target']);
            $this->controller = $controller;
            $this->method = $method;

            if(is_callable([new $this->controller, $this->method]))
            {
                call_user_func_array([ $this->controller, $this->method],
                    [$this->match['params']]);
            }
            else{
                echo "The method {$this->method} is not defined in {$this->controller}";
            }
        }

        else{
            header($_SERVER["SERVER_PROTOCOL"]."404 not found");
            view("errors/404");
        }
    }
}