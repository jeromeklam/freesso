<?php
/**
 * Classe de controle de la partie SSO
 *
 * @author jeromeklam
 * @package SSO\Controller
 */
namespace FreeSSO\Controller;

use \FreeSSO\Server as SsoServer;
use \FreeSSO\ErrorCodes as SsoErrors;

/**
 * Classe controlleur SSO
 * @author jeromeklam
 */
class Sso extends \FreeFW\Core\Controller
{

    /**
     * Check and touch session
     * 
     * @param \Psr\Http\Message\ServerRequestInterface $p_request
     * 
     * @return \Psr\Http\Message\ResponseInterface
     */
    public function check(\Psr\Http\Message\ServerRequestInterface $p_request)
    {
        $this->logger->debug('FreeSSO.Controller.Sso.login.start');
        $this->logger->debug('FreeSSO.Controller.Sso.login.end');
        return $this->createResponse(204);
    }

    /**
     * signIn
     *
     * @param \Psr\Http\Message\ServerRequestInterface $p_request
     *
     * @return \Psr\Http\Message\ResponseInterface
     */
    public function signIn(\Psr\Http\Message\ServerRequestInterface $p_request)
    {
        $this->logger->debug('FreeSSO.Controller.Sso.login.start');
        $apiParams = $p_request->getAttribute('api_params', false);
        $data      = null;
        //
        if ($apiParams->hasData()) {
            /**
             * @var \FreeSSO\Model\LoginRequest $data
             */
            $data = $apiParams->getData();
            if ($data->getLogin() != '') {
                if ($data->getPassword() == '') {
                    $data->addError(
                        SsoErrors::ERROR_PASSWORD_EMPTY,
                        sprintf('Password required !'),
                        \FreeSSO\Model\Error::TYPE_PRECONDITION,
                        'password'
                    );
                    return $this->createResponse(409, $data);
                }
                /**
                 * @var \FreeSSO\Server $sso
                 */
                try {
                    $sso  = \FreeFW\DI\Di::getShared('sso');
                    $user = $sso->signinByLoginAndPassword($data->getLogin(), $data->getPassword());
                    return $this->createResponse(201, $user);
                } catch (\Exception $ex) {
                    // @todo
                    $error = \FreeSSO\Model\Error::getFromException(409, $ex);
                    return $this->createResponse(409, $error);
                }
            } else {
                $data->addError(
                    SsoErrors::ERROR_LOGIN_EMPTY,
                    sprintf('Password required !'),
                    \FreeFW\Core\Error::TYPE_PRECONDITION,
                    'login'
                );
            }
        }
        $this->logger->debug('FreeSSO.Controller.Sso.login.end');
        return $this->createResponse(200);
    }

    /**
     * signIn
     *
     * @param \Psr\Http\Message\ServerRequestInterface $p_request
     *
     * @return \Psr\Http\Message\ResponseInterface
     */
    public function signOut(\Psr\Http\Message\ServerRequestInterface $p_request)
    {
        $this->logger->debug('FreeSSO.Controller.Sso.logout.start');
        /**
         * @var \FreeSSO\Server $sso
         */
        try {
            $sso  = \FreeFW\DI\Di::getShared('sso');
            $user = $sso->logout();
            return $this->createResponse(204);
        } catch (\Exception $ex) {
            // @todo
            $error = \FreeFW\Model\Error::getFromException(409, $ex);
            return $this->createResponse(409, $error);
        }
        $this->logger->debug('FreeSSO.Controller.Sso.logout.end');
        return $this->createResponse(204);
    }
}
