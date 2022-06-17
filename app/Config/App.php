<?php

namespace Michalkoder\RetaCamada\Config;

class App 
{

    public function __construct() {

    #--------------------------------------------------------------------
    # PATHS
    #--------------------------------------------------------------------


    define('BASEPATH', realpath(dirname(__FILE__) . '/../..'));
    define('APPPATH', realpath(dirname(__FILE__) . '/..'));
    define('VIEWSPATH', APPPATH.'/Views/');
    define('WRITEPATH', BASEPATH.'/writable/');

    define('BASEURL', getenv('app.baseURL'));
    #--------------------------------------------------------------------
    # LOAD ENVIRONMENT VARIABLES
    #--------------------------------------------------------------------
    (new DotEnv(__DIR__ . '/.env'))->load();


    #--------------------------------------------------------------------
    # ROUTES
    #--------------------------------------------------------------------

    $dispatcher = \FastRoute\simpleDispatcher(function(\FastRoute\RouteCollector $r) {
        $r->addRoute('GET', '/', 'HomeController::index');
        $r->addRoute('GET', '/dashboard', 'DashboardController::index');
        $r->addRoute('POST', '/dashboard', 'DashboardController::index');
        $r->addRoute('GET', '/dashboard/add_edit_candidate', 'DashboardController::addEditCandidate');
        $r->addRoute('POST', '/dashboard/add_edit_candidate', 'DashboardController::addEditCandidate');

    });

    // Fetch method and URI from somewhere
    $httpMethod = $_SERVER['REQUEST_METHOD'];
    $uri = $_SERVER['REQUEST_URI'];

    // Strip query string (?foo=bar) and decode URI
    if (false !== $pos = strpos($uri, '?')) {
        $uri = substr($uri, 0, $pos);
    }
    $uri = rawurldecode($uri);

    $routeInfo = $dispatcher->dispatch($httpMethod, $uri);

    switch ($routeInfo[0]) {
        case \FastRoute\Dispatcher::NOT_FOUND:
            // ... 404 Not Found
            echo '404 not found'.PHP_EOL;
            echo $uri;
            break;
        case \FastRoute\Dispatcher::METHOD_NOT_ALLOWED:
            $allowedMethods = $routeInfo[1];
            // ... 405 Method Not Allowed
            echo '405 Method Not Allowed';
            break;
        case \FastRoute\Dispatcher::FOUND:
            $handler = $routeInfo[1];
            $vars = $routeInfo[2];
            // ... call $handler with $vars
            $contMeth = explode('::',$handler);
            $controller_namespace = '\\Michalkoder\\RetaCamada\\Controllers\\';
            $controller_name = $controller_namespace.$contMeth[0];
            $controller = new $controller_name;
            $method = $contMeth[1];
            $controller->$method();
            break;
    }
    
        // every session data made available for single request only
        session_destroy();
    }
}


