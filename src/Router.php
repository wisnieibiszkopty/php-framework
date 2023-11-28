<?php

namespace Kamil\Framework;

class Router {
    private static $instance;
    protected array $routes = [];

    private function __construct(){}

    public static function getInstance(): Router{
        if (!self::$instance) {
            self::$instance = new self();
        }
        return self::$instance;
    }

    public function add(string $method, string $url, $target): void{
        $this->routes[$method][$url] = $target;
    }

    public function match(): void {
        // jebane stringi
        // pokurwi mnie zaraz
        $method = $_SERVER['REQUEST_METHOD'];
        $url = substr($_SERVER['REQUEST_URI'], strlen(Config::APP_DIR)+1);

        if (isset($this->routes[$method])) {
            foreach ($this->routes[$method] as $routeUrl => $target) {
                $pattern = preg_replace('/\/:([^\/]+)/', '/(?P<$1>[^/]+)', $routeUrl);
                if (preg_match('#^' . $pattern . '$#', $url, $matches)) {
                    $params = array_filter($matches, 'is_string', ARRAY_FILTER_USE_KEY); 
                    call_user_func_array($target, $params);
                    return;
                }
            }
        }
        echo "<h1>404 Page not found</h1>";
    }

}