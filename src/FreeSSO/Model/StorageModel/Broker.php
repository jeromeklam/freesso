<?php
namespace FreeSSO\Model\StorageModel;

use \FreeFW\Constants as FFCST;

/**
 * Broker
 *
 * @author jeromeklam
 */
abstract class Broker extends \FreeFW\Core\StorageModel
{

    /**
     * Field properties as static arrays
     * @var array
     */
    protected static $PRP_BRK_ID = [
        'destination' => 'brk_id',
        'type'        => FFCST::TYPE_BIGINT,
        'options'     => [FFCST::OPTION_PK]
    ];
    protected static $PRP_DOM_ID = [
        'destination' => 'dom_id',
        'type'        => FFCST::TYPE_BIGINT,
        'options'     => [FFCST::OPTION_REQUIRED]
    ];
    protected static $PRP_BRK_KEY = [
        'destination' => 'brk_key',
        'type'        => FFCST::TYPE_STRING,
        'options'     => [FFCST::OPTION_REQUIRED]
    ];
    protected static $PRP_BRK_NAME = [
        'destination' => 'brk_name',
        'type'        => FFCST::TYPE_STRING,
        'options'     => [FFCST::OPTION_REQUIRED]
    ];
    protected static $PRP_BRK_CERTIFICATE = [
        'destination' => 'brk_certificate',
        'type'        => FFCST::TYPE_MD5
    ];
    protected static $PRP_BRK_ACTIVE = [
        'destination' => 'brk_active',
        'type'        => FFCST::TYPE_BOOLEAN
    ];
    protected static $PRP_BRK_TS = [
        'destination' => 'brk_ts',
        'type'        => FFCST::TYPE_DATETIME
    ];
    protected static $PRP_BRK_API_SCOPE = [
        'destination' => 'brk_api_scope',
        'type'        => FFCST::TYPE_TEXT
    ];
    protected static $PRP_BRK_USERS_SCOPE = [
        'destination' => 'brk_users_scope',
        'type'        => FFCST::TYPE_TEXT
    ];
    protected static $PRP_BRK_IPS = [
        'destination' => 'brk_ips',
        'type'        => FFCST::TYPE_TEXT
    ];
    protected static $PRP_BRK_CONFIG = [
        'destination' => 'brk_config',
        'type'        => FFCST::TYPE_TEXT
    ];

    /**
     * get properties
     *
     * @return array[]
     */
    public static function getProperties()
    {
        return [
            'brk_id'          => self::$PRP_BRK_ID,
            'dom_id'          => self::$PRP_DOM_ID,
            'brk_key'         => self::$PRP_BRK_KEY,
            'brk_name'        => self::$PRP_BRK_NAME,
            'brk_certificate' => self::$PRP_BRK_CERTIFICATE,
            'brk_active'      => self::$PRP_BRK_ACTIVE,
            'brk_ts'          => self::$PRP_BRK_TS,
            'brk_api_scope'   => self::$PRP_BRK_API_SCOPE,
            'brk_users_scope' => self::$PRP_BRK_USERS_SCOPE,
            'brk_ips'         => self::$PRP_BRK_IPS,
            'brk_config'      => self::$PRP_BRK_CONFIG
        ];
    }

    /**
     * Set object source
     *
     * @return string
     */
    public static function getSource()
    {
        return 'sso_broker';
    }
}
