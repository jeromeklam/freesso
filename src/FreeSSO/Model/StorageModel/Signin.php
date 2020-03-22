<?php
namespace FreeSSO\Model\StorageModel;

use \FreeFW\Constants as FFCST;

/**
 * Signin
 *
 * @author jeromeklam
 */
abstract class Signin extends \FreeFW\Core\StorageModel
{

/**
 * Field properties as static arrays
 * @var array
 */
    protected static $PRP_LOGIN = [
        FFCST::PROPERTY_PRIVATE => 'login',
        FFCST::PROPERTY_TYPE    => FFCST::TYPE_STRING,
        FFCST::PROPERTY_OPTIONS => [FFCST::OPTION_REQUIRED]
    ];
    protected static $PRP_PASSWORD = [
        FFCST::PROPERTY_PRIVATE => 'password',
        FFCST::PROPERTY_TYPE    => FFCST::TYPE_STRING,
        FFCST::PROPERTY_OPTIONS => [FFCST::OPTION_REQUIRED]
    ];
    protected static $PRP_PASSWORD2 = [
        FFCST::PROPERTY_PRIVATE => 'password2',
        FFCST::PROPERTY_TYPE    => FFCST::TYPE_STRING,
        FFCST::PROPERTY_OPTIONS => []
    ];
    protected static $PRP_REMEMBER = [
        FFCST::PROPERTY_PRIVATE => 'remember',
        FFCST::PROPERTY_TYPE    => FFCST::TYPE_INTEGER,
        FFCST::PROPERTY_OPTIONS => [FFCST::OPTION_REQUIRED]
    ];
    protected static $PRP_TOKEN = [
        FFCST::PROPERTY_PRIVATE => 'token',
        FFCST::PROPERTY_TYPE    => FFCST::TYPE_STRING,
        FFCST::PROPERTY_OPTIONS => []
    ];

    /**
     * get properties
     *
     * @return array[]
     */
    public static function getProperties()
    {
        return [
            'login'     => self::$PRP_LOGIN,
            'password'  => self::$PRP_PASSWORD,
            'password2' => self::$PRP_PASSWORD2,
            'remember'  => self::$PRP_REMEMBER,
            'token'     => self::$PRP_TOKEN,
        ];
    }

    /**
     * Set object source
     *
     * @return string
     */
    public static function getSource()
    {
        return 'dummy_signin';
    }
}
