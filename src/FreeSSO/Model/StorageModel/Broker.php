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
        FFCST::PROPERTY_PRIVATE => 'brk_id',
        FFCST::PROPERTY_TYPE    => FFCST::TYPE_BIGINT,
        FFCST::PROPERTY_OPTIONS => [FFCST::OPTION_PK]
    ];
    protected static $PRP_DOM_ID = [
        FFCST::PROPERTY_PRIVATE => 'dom_id',
        FFCST::PROPERTY_TYPE    => FFCST::TYPE_BIGINT,
        FFCST::PROPERTY_OPTIONS => [FFCST::OPTION_REQUIRED, FFCST::OPTION_FK],
        FFCST::PROPERTY_FK      => ['domain' =>
            [
                'model' => 'FreeSSO::Model::Domain',
                'field' => 'dom_id',
                'type'  => \FreeFW\Model\Query::JOIN_LEFT
            ]
        ]
    ];
    protected static $PRP_BRK_KEY = [
        FFCST::PROPERTY_PRIVATE => 'brk_key',
        FFCST::PROPERTY_TYPE    => FFCST::TYPE_STRING,
        FFCST::PROPERTY_OPTIONS => [FFCST::OPTION_REQUIRED]
    ];
    protected static $PRP_BRK_NAME = [
        FFCST::PROPERTY_PRIVATE => 'brk_name',
        FFCST::PROPERTY_TYPE    => FFCST::TYPE_STRING,
        FFCST::PROPERTY_OPTIONS => [FFCST::OPTION_REQUIRED]
    ];
    protected static $PRP_BRK_CERTIFICATE = [
        FFCST::PROPERTY_PRIVATE => 'brk_certificate',
        FFCST::PROPERTY_TYPE    => FFCST::TYPE_MD5
    ];
    protected static $PRP_BRK_ACTIVE = [
        FFCST::PROPERTY_PRIVATE => 'brk_active',
        FFCST::PROPERTY_TYPE    => FFCST::TYPE_BOOLEAN
    ];
    protected static $PRP_BRK_TS = [
        FFCST::PROPERTY_PRIVATE => 'brk_ts',
        FFCST::PROPERTY_TYPE    => FFCST::TYPE_DATETIME
    ];
    protected static $PRP_BRK_API_SCOPE = [
        FFCST::PROPERTY_PRIVATE => 'brk_api_scope',
        FFCST::PROPERTY_TYPE    => FFCST::TYPE_TEXT
    ];
    protected static $PRP_BRK_USERS_SCOPE = [
        FFCST::PROPERTY_PRIVATE => 'brk_users_scope',
        FFCST::PROPERTY_TYPE    => FFCST::TYPE_TEXT
    ];
    protected static $PRP_BRK_IPS = [
        FFCST::PROPERTY_PRIVATE => 'brk_ips',
        FFCST::PROPERTY_TYPE    => FFCST::TYPE_TEXT
    ];
    protected static $PRP_BRK_CONFIG = [
        FFCST::PROPERTY_PRIVATE => 'brk_config',
        FFCST::PROPERTY_TYPE    => FFCST::TYPE_TEXT
    ];
    protected static $PRP_GRP_ID = [
        FFCST::PROPERTY_PRIVATE => 'grp_id',
        FFCST::PROPERTY_TYPE    => FFCST::TYPE_BIGINT,
        FFCST::PROPERTY_OPTIONS => [FFCST::OPTION_REQUIRED, FFCST::OPTION_FK],
        FFCST::PROPERTY_FK      => ['group' =>
            [
                'model' => 'FreeSSO::Model::Group',
                'field' => 'grp_id',
                'type'  => \FreeFW\Model\Query::JOIN_LEFT
            ]
        ]
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
            'brk_config'      => self::$PRP_BRK_CONFIG,
            'grp_id'          => self::$PRP_GRP_ID,
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
