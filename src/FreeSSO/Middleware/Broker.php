<?php
namespace FreeSSO\Middleware;

use \Psr\Http\Server\MiddlewareInterface;
use \Psr\Http\Server\RequestHandlerInterface;
use \Psr\Http\Message\ResponseFactoryInterface;
use \Psr\Http\Message\ServerRequestInterface;
use \Psr\Http\Message\ResponseInterface;

/**
 *
 * @author jerome.klam
 *
 */
class Broker implements
    MiddlewareInterface,
    \Psr\Log\LoggerAwareInterface,
    \FreeFW\Interfaces\ConfigAwareTraitInterface,
    \Psr\Http\Message\ResponseFactoryInterface
{
    
    /**
     * comportements
     */
    use \Psr\Log\LoggerAwareTrait;
    use \FreeFW\Behaviour\EventManagerAwareTrait;
    use \FreeFW\Behaviour\ConfigAwareTrait;
    use \FreeFW\Behaviour\HttpFactoryTrait;

    /**
     * before Middleware
     *
     * @param ServerRequestInterface $p_request
     */
    protected function beforeProcess(ServerRequestInterface $p_request)
    {
        $ssoServer = \FreeFW\DI\DI::getShared('sso');
        if ($ssoServer === null || $ssoServer === false) {
            $ssoConfig = $this->config->get('sso');
            $ssoServer = \FreeSSO\Server::getInstance($p_request, $ssoConfig);
            \FreeFW\DI\DI::setShared('sso', $ssoServer);
        }
        return $ssoServer;
    }

    /**
     * Process an incoming server request and return a response, optionally delegating
     * to the next middleware component to create the response.
     *
     * @param ServerRequestInterface  $p_request
     * @param RequestHandlerInterface $p_handler
     *
     * @return ResponseInterface
     */
    public function process(
        ServerRequestInterface $p_request,
        RequestHandlerInterface $p_handler
    ): ResponseInterface {
        try {
            $sso = $this->beforeProcess($p_request);
            if ($sso !== false) {
                $request  = $p_request->withAttribute('broker', $sso->getIdentifier());
                $response = $p_handler->handle($p_request);
                $appId    = \PawBx\Sso\Http\Remote::getApplicationCookie();
                $ssoId    = \PawBx\Sso\Http\Remote::getSSOCookie();
                $response = $response->withHeader('AppId', $appId);
                $response = $response->withHeader('SsoId', $ssoId);
            } else {
                $this->logger->debug('broker.401');
                $response = $this->createResponse(401);
            }
            // response must be converted to correct type
            return $response;
        } catch (\Exception $ex) {
            // @todo : critical
            return $this->createResponse(500);
        }
    }
}
