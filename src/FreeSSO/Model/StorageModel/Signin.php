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
    protected static $PRP_REMEMBER = [
        FFCST::PROPERTY_PRIVATE => 'remember',
        FFCST::PROPERTY_TYPE    => FFCST::TYPE_INTEGER,
        FFCST::PROPERTY_OPTIONS => [FFCST::OPTION_REQUIRED]
    ];

    /**
     * get properties
     *
     * @return array[]
     */
    public static function getProperties()
    {
        return [
            'login'    => self::$PRP_LOGIN,
            'password' => self::$PRP_PASSWORD,
            'remember' => self::$PRP_REMEMBER
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
