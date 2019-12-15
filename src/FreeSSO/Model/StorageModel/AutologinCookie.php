<?php
namespace FreeSSO\Model\StorageModel;

use \FreeFW\Constants as FFCST;

/**
 * AutologinCookie
 *
 * @author jeromeklam
 */
abstract class AutologinCookie extends \FreeFW\Core\StorageModel
{

/**
 * Field properties as static arrays
 * @var array
 */
    protected static $PRP_USER_ID = [
        FFCST::PROPERTY_PRIVATE => 'user_id',
        FFCST::PROPERTY_TYPE    => FFCST::TYPE_BIGINT,
        FFCST::PROPERTY_OPTIONS => []
    ];
    protected static $PRP_AUTO_COOKIE = [
        FFCST::PROPERTY_PRIVATE => 'auto_cookie',
        FFCST::PROPERTY_TYPE    => FFCST::TYPE_STRING,
        FFCST::PROPERTY_OPTIONS => [FFCST::OPTION_REQUIRED]
    ];
    protected static $PRP_AUTO_IP = [
        FFCST::PROPERTY_PRIVATE => 'auto_ip',
        FFCST::PROPERTY_TYPE    => FFCST::TYPE_STRING,
        FFCST::PROPERTY_OPTIONS => []
    ];
    protected static $PRP_AUTO_TS = [
        FFCST::PROPERTY_PRIVATE => 'auto_ts',
        FFCST::PROPERTY_TYPE    => FFCST::TYPE_DATETIME,
        FFCST::PROPERTY_OPTIONS => []
    ];
    protected static $PRP_AUTO_EXPIRE = [
        FFCST::PROPERTY_PRIVATE => 'auto_expire',
        FFCST::PROPERTY_TYPE    => FFCST::TYPE_DATETIME,
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
            'user_id'     => self::$PRP_USER_ID,
            'auto_cookie' => self::$PRP_AUTO_COOKIE,
            'auto_ip'     => self::$PRP_AUTO_IP,
            'auto_ts'     => self::$PRP_AUTO_TS,
            'auto_expire' => self::$PRP_AUTO_EXPIRE
        ];
    }

    /**
     * Set object source
     *
     * @return string
     */
    public static function getSource()
    {
        return 'sso_autologin_cookie';
    }
}
