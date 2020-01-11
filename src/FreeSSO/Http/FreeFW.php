<?php
namespace FreeSSO\Http;

/**
 * FreeSSO routes
 *
 * @author jeromeklam
 */
class FreeFW
{

    /**
     * Retourne une liste de routes au format FreeFW
     *
     * @return \FreeFW\Router\RouteCollection
     */
    public static function getRoutes()
    {
        $routes  = new \FreeFW\Router\RouteCollection();
        $paths   = [];
        $paths[] = __DIR__ . '/../resource/routes/restful/v1/routes.php';
        foreach ($paths as $idx => $onePath) {
            $apiRoutes = @include($onePath);
            if (is_array($apiRoutes)) {
                foreach ($apiRoutes as $idx => $apiRoute) {
                    if (!array_key_exists('auth', $apiRoute)) {
                        $apiRoute['auth'] = \FreeFW\Router\Route::AUTH_IN;
                    }
                    $myRoute = new \FreeFW\Router\Route();
                    $myRoute
                        ->setMethod($apiRoute['method'])
                        ->setUrl($apiRoute['url'])
                        ->setController($apiRoute['controller'])
                        ->setFunction($apiRoute['function'])
                    ;
                    if (array_key_exists('auth', $apiRoute)) {
                        $myRoute->setAuth($apiRoute['auth']);
                    }
                    if (array_key_exists('include', $apiRoute)) {
                        $myRoute->setInclude($apiRoute['include']);
                    }
                    if (array_key_exists('model', $apiRoute)) {
                        $myRoute->setDefaultModel($apiRoute['model']);
                    }
                    $routes->addRoute($myRoute);
                }
            }
        }
        return $routes;
    }
}
