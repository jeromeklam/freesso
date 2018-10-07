<?php
/**
 * Constantes pour le serveur SSO
 *
 * @author jeromeklam
 * @package SSO\Constants
 */
namespace FreeSSO;

/**
 * Constantes pour le serveur SSO
 * @author jeromeklam
 */
class Constants
{

    /**
     * Brokers, ...
     * @var mixed
     */
    const BROKER_KEY              = 'broker-key';
    const BROKER_SECRET           = 'broker-secret';
    const BROKER_SESSION_LIFETIME = 60; // Minutes

    /**
     * Cookies default values
     * @var mixed
     */
    const COOKIE_CDSSO          = 'SsoId';
    const COOKIE_APP            = 'AppId';
    const HEADER_CDSSO          = 'SsoId';
    const HEADER_APP            = 'AppId';
    const COOKIE_APP_DAYS       = 360; // Days

    /**
     * Other constants
     * @var mixed
     */
    const SESSION_LIFETIME = 50; // Seconds
}
