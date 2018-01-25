<?php

/* 
 *  Simple route with fastroutes
 * author : Taichu
 */

function routes($http , $uri) {
    
    $dispatcher = FastRoute\simpleDispatcher(function(FastRoute\RouteCollector $r) {
    $r->addRoute('GET', '/question/', 'questions#get_answer');
    $r->addRoute('GET', '/hello', 'questions#get_hello');
    $r->addRoute('GET', '/question/{name}/{id}/', 'questions#get_answer');
    $r->addRoute('GET', '/question/{name}/{id}', 'questions#get_answer');
});

// Strip query string (?foo=bar) and decode URI
if (false !== $pos = strpos($uri, '?')) {
    $uri = substr($uri, 0, $pos);
}

$uri = rawurldecode($uri);
$uri = str_replace(BASENAME_DIR . '/', '', $uri);

$routeInfo = $dispatcher->dispatch($http, $uri);

switch ($routeInfo[0]) {
    case FastRoute\Dispatcher::NOT_FOUND:
        echo '404 not found';
        break;
    case FastRoute\Dispatcher::METHOD_NOT_ALLOWED:
        $allowedMethods = $routeInfo[1];
        echo 'allowed not found';
        break;
    case FastRoute\Dispatcher::FOUND:
        
        $handler = explode('#', $routeInfo[1]);
        $build = $handler[0];
        $function = $handler[1];
        $vars = $routeInfo[2];
        $interfaces = APP_INTERFACE. $build;
        $interfaces = new $interfaces();
        $interfaces->$function();
        break;
}

}
