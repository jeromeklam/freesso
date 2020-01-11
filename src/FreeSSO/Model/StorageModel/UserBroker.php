<?php
namespace FreeSSO\Model\StorageModel;

use \FreeFW\Constants as FFCST;

/**
 * UserBroker
 *
 * @author jeromeklam
 */
abstract class UserBroker extends \FreeFW\Core\StorageModel
{

/**
 * Field properties as static arrays
 * @var array
 */
    protected static $PRP_UBRK_ID = [
        FFCST::PROPERTY_PRIVATE => 'ubrk_id',
        FFCST::PROPERTY_TYPE    => FFCST::TYPE_BIGINT,
        FFCST::PROPERTY_OPTIONS => [FFCST::OPTION_REQUIRED, FFCST::OPTION_PK]
    ];
    protected static $PRP_BRK_ID = [
        FFCST::PROPERTY_PRIVATE => 'brk_id',
        FFCST::PROPERTY_TYPE    => FFCST::TYPE_BIGINT,
        FFCST::PROPERTY_OPTIONS => [FFCST::OPTION_REQUIRED, FFCST::OPTION_FK],
        FFCST::PROPERTY_FK      => ['broker' =>
            [
                'model' => 'FreeSSO::Model::Broker',
                'field' => 'brk_id',
                'type'  => \FreeFW\Model\Query::JOIN_LEFT
            ]
        ]
    ];
    protected static $PRP_USER_ID = [
        FFCST::PROPERTY_PRIVATE => 'user_id',
        FFCST::PROPERTY_TYPE    => FFCST::TYPE_BIGINT,
        FFCST::PROPERTY_OPTIONS => [FFCST::OPTION_REQUIRED, FFCST::OPTION_FK],
        FFCST::PROPERTY_FK      => ['user' =>
            [
                'model' => 'FreeSSO::Model::User',
                'field' => 'user_id',
                'type'  => \FreeFW\Model\Query::JOIN_LEFT
            ]
        ]
    ];
    protected static $PRP_UBRK_TS = [
        FFCST::PROPERTY_PRIVATE => 'ubrk_ts',
        FFCST::PROPERTY_TYPE    => FFCST::TYPE_DATETIME,
        FFCST::PROPERTY_OPTIONS => [FFCST::OPTION_REQUIRED]
    ];
    protected static $PRP_UBRK_PARTNER_TYPE = [
        FFCST::PROPERTY_PRIVATE => 'ubrk_partner_type',
        FFCST::PROPERTY_TYPE    => FFCST::TYPE_STRING,
        FFCST::PROPERTY_OPTIONS => [FFCST::OPTION_REQUIRED]
    ];
    protected static $PRP_UBRK_PARTNER_ID = [
        FFCST::PROPERTY_PRIVATE => 'ubrk_partner_id',
        FFCST::PROPERTY_TYPE    => FFCST::TYPE_BIGINT,
        FFCST::PROPERTY_OPTIONS => [FFCST::OPTION_REQUIRED]
    ];
    protected static $PRP_UBRK_AUTH_METHOD = [
        FFCST::PROPERTY_PRIVATE => 'ubrk_auth_method',
        FFCST::PROPERTY_TYPE    => FFCST::TYPE_STRING,
        FFCST::PROPERTY_OPTIONS => [FFCST::OPTION_REQUIRED]
    ];
    protected static $PRP_UBRK_AUTH_DATAS = [
        FFCST::PROPERTY_PRIVATE => 'ubrk_auth_datas',
        FFCST::PROPERTY_TYPE    => FFCST::TYPE_BLOB,
        FFCST::PROPERTY_OPTIONS => []
    ];
    protected static $PRP_UBRK_END = [
        FFCST::PROPERTY_PRIVATE => 'ubrk_end',
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
            'ubrk_id'           => self::$PRP_UBRK_ID,
            'brk_id'            => self::$PRP_BRK_ID,
            'user_id'           => self::$PRP_USER_ID,
            'ubrk_ts'           => self::$PRP_UBRK_TS,
            'ubrk_partner_type' => self::$PRP_UBRK_PARTNER_TYPE,
            'ubrk_partner_id'   => self::$PRP_UBRK_PARTNER_ID,
            'ubrk_auth_method'  => self::$PRP_UBRK_AUTH_METHOD,
            'ubrk_auth_datas'   => self::$PRP_UBRK_AUTH_DATAS,
            'ubrk_end'          => self::$PRP_UBRK_END
        ];
    }

    /**
     * Set object source
     *
     * @return string
     */
    public static function getSource()
    {
        return 'sso_user_broker';
    }
}
