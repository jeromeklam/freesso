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
        FFCST::PROPERTY_OPTIONS => []
    ];
    protected static $PRP_AUTO_IP = [
        FFCST::PROPERTY_PRIVATE => 'auto_ip',
        FFCST::PROPERTY_TYPE    => FFCST::TYPE_STRING,
        FFCST::PROPERTY_OPTIONS => []
    ];
    protected static $PRP_AUTO_PASWD = [
        FFCST::PROPERTY_PRIVATE => 'auto_paswd',
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
            'user_id'     => $PRP_USER_ID,
            'auto_cookie' => $PRP_AUTO_COOKIE,
            'auto_ip'     => $PRP_AUTO_IP,
            'auto_paswd'  => $PRP_AUTO_PASWD
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
