<?php
namespace FreeSSO\Model\StorageModel;

use \FreeFW\Constants as FFCST;

/**
 * PasswordToken
 *
 * @author jeromeklam
 */
abstract class PasswordToken extends \FreeFW\Core\StorageModel
{

/**
 * Field properties as static arrays
 * @var array
 */
    protected static $PRP_PTOK_ID = [
        FFCST::PROPERTY_PRIVATE => 'ptok_id',
        FFCST::PROPERTY_TYPE    => FFCST::TYPE_BIGINT,
        FFCST::PROPERTY_OPTIONS => [FFCST::OPTION_REQUIRED, FFCST::OPTION_PK]
    ];
    protected static $PRP_PTOK_TOKEN = [
        FFCST::PROPERTY_PRIVATE => 'ptok_token',
        FFCST::PROPERTY_TYPE    => FFCST::TYPE_STRING,
        FFCST::PROPERTY_OPTIONS => [FFCST::OPTION_REQUIRED]
    ];
    protected static $PRP_PTOK_USED = [
        FFCST::PROPERTY_PRIVATE => 'ptok_used',
        FFCST::PROPERTY_TYPE    => FFCST::TYPE_INTEGER,
        FFCST::PROPERTY_OPTIONS => [FFCST::OPTION_REQUIRED]
    ];
    protected static $PRP_PTOK_EMAIL = [
        FFCST::PROPERTY_PRIVATE => 'ptok_email',
        FFCST::PROPERTY_TYPE    => FFCST::TYPE_STRING,
        FFCST::PROPERTY_OPTIONS => [FFCST::OPTION_REQUIRED]
    ];
    protected static $PRP_USER_ID = [
        FFCST::PROPERTY_PRIVATE => 'user_id',
        FFCST::PROPERTY_TYPE    => FFCST::TYPE_BIGINT,
        FFCST::PROPERTY_OPTIONS => []
    ];
    protected static $PRP_PTOK_REQUEST_IP = [
        FFCST::PROPERTY_PRIVATE => 'ptok_request_ip',
        FFCST::PROPERTY_TYPE    => FFCST::TYPE_STRING,
        FFCST::PROPERTY_OPTIONS => []
    ];
    protected static $PRP_PTOK_RESOLVE_IP = [
        FFCST::PROPERTY_PRIVATE => 'ptok_resolve_ip',
        FFCST::PROPERTY_TYPE    => FFCST::TYPE_STRING,
        FFCST::PROPERTY_OPTIONS => []
    ];
    protected static $PRP_PTOK_END = [
        FFCST::PROPERTY_PRIVATE => 'ptok_end',
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
            'ptok_id'         => $PRP_PTOK_ID,
            'ptok_token'      => $PRP_PTOK_TOKEN,
            'ptok_used'       => $PRP_PTOK_USED,
            'ptok_email'      => $PRP_PTOK_EMAIL,
            'user_id'         => $PRP_USER_ID,
            'ptok_request_ip' => $PRP_PTOK_REQUEST_IP,
            'ptok_resolve_ip' => $PRP_PTOK_RESOLVE_IP,
            'ptok_end'        => $PRP_PTOK_END
        ];
    }

    /**
     * Set object source
     *
     * @return string
     */
    public static function getSource()
    {
        return 'sso_password_token';
    }
}
