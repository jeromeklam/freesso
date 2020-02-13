<?php
namespace FreeSSO\Model\StorageModel;

use \FreeFW\Constants as FFCST;

/**
 * Group
 *
 * @author jeromeklam
 */
abstract class Group extends \FreeFW\Core\StorageModel
{

/**
 * Field properties as static arrays
 * @var array
 */
    protected static $PRP_GRP_ID = [
        FFCST::PROPERTY_PRIVATE => 'grp_id',
        FFCST::PROPERTY_TYPE    => FFCST::TYPE_BIGINT,
        FFCST::PROPERTY_OPTIONS => [FFCST::OPTION_REQUIRED, FFCST::OPTION_PK]
    ];
    protected static $PRP_GRPT_ID = [
        FFCST::PROPERTY_PRIVATE => 'grpt_id',
        FFCST::PROPERTY_TYPE    => FFCST::TYPE_BIGINT,
        FFCST::PROPERTY_OPTIONS => [FFCST::OPTION_REQUIRED, FFCST::OPTION_FK],
        FFCST::PROPERTY_FK      => ['group_type' =>
            [
                'model' => 'FreeSSO::Model::GroupType',
                'field' => 'grpt_id',
                'type'  => \FreeFW\Model\Query::JOIN_LEFT
            ]
        ]
    ];
    protected static $PRP_GRP_CODE = [
        FFCST::PROPERTY_PRIVATE => 'grp_code',
        FFCST::PROPERTY_TYPE    => FFCST::TYPE_STRING,
        FFCST::PROPERTY_OPTIONS => [FFCST::OPTION_REQUIRED]
    ];
    protected static $PRP_GRP_NAME = [
        FFCST::PROPERTY_PRIVATE => 'grp_name',
        FFCST::PROPERTY_TYPE    => FFCST::TYPE_STRING,
        FFCST::PROPERTY_OPTIONS => [FFCST::OPTION_REQUIRED]
    ];
    protected static $PRP_GRP_ADDRESS1 = [
        FFCST::PROPERTY_PRIVATE => 'grp_address1',
        FFCST::PROPERTY_TYPE    => FFCST::TYPE_STRING,
        FFCST::PROPERTY_OPTIONS => []
    ];
    protected static $PRP_GRP_ADDRESS2 = [
        FFCST::PROPERTY_PRIVATE => 'grp_address2',
        FFCST::PROPERTY_TYPE    => FFCST::TYPE_STRING,
        FFCST::PROPERTY_OPTIONS => []
    ];
    protected static $PRP_GRP_ADDRESS3 = [
        FFCST::PROPERTY_PRIVATE => 'grp_address3',
        FFCST::PROPERTY_TYPE    => FFCST::TYPE_STRING,
        FFCST::PROPERTY_OPTIONS => []
    ];
    protected static $PRP_GRP_CP = [
        FFCST::PROPERTY_PRIVATE => 'grp_cp',
        FFCST::PROPERTY_TYPE    => FFCST::TYPE_STRING,
        FFCST::PROPERTY_OPTIONS => []
    ];
    protected static $PRP_GRP_TOWN = [
        FFCST::PROPERTY_PRIVATE => 'grp_town',
        FFCST::PROPERTY_TYPE    => FFCST::TYPE_STRING,
        FFCST::PROPERTY_OPTIONS => []
    ];
    protected static $PRP_CNTY_ID = [
        FFCST::PROPERTY_PRIVATE => 'cnty_id',
        FFCST::PROPERTY_TYPE    => FFCST::TYPE_BIGINT,
        FFCST::PROPERTY_OPTIONS => [FFCST::OPTION_FK],
        FFCST::PROPERTY_FK      => ['country' =>
            [
                'model' => 'FreeFW::Model::Country',
                'field' => 'cnty_id',
                'type'  => \FreeFW\Model\Query::JOIN_LEFT
            ]
        ]
    ];
    protected static $PRP_LANG_ID = [
        FFCST::PROPERTY_PRIVATE => 'lang_id',
        FFCST::PROPERTY_TYPE    => FFCST::TYPE_BIGINT,
        FFCST::PROPERTY_OPTIONS => [FFCST::OPTION_FK],
        FFCST::PROPERTY_FK      => ['lang' =>
            [
                'model' => 'FreeFW::Model::Lang',
                'field' => 'lang_id',
                'type'  => \FreeFW\Model\Query::JOIN_LEFT
            ]
        ]
    ];
    protected static $PRP_GRP_FROM = [
        FFCST::PROPERTY_PRIVATE => 'grp_from',
        FFCST::PROPERTY_TYPE    => FFCST::TYPE_DATETIMETZ,
        FFCST::PROPERTY_OPTIONS => []
    ];
    protected static $PRP_GRP_TO = [
        FFCST::PROPERTY_PRIVATE => 'grp_to',
        FFCST::PROPERTY_TYPE    => FFCST::TYPE_DATETIMETZ,
        FFCST::PROPERTY_OPTIONS => []
    ];
    protected static $PRP_GRP_PARENT_ID = [
        FFCST::PROPERTY_PRIVATE => 'grp_parent_id',
        FFCST::PROPERTY_TYPE    => FFCST::TYPE_BIGINT,
        FFCST::PROPERTY_OPTIONS => [FFCST::OPTION_FK],
        FFCST::PROPERTY_FK      => ['parent' =>
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
            'grp_id'        => self::$PRP_GRP_ID,
            'grpt_id'       => self::$PRP_GRPT_ID,
            'grp_code'      => self::$PRP_GRP_CODE,
            'grp_name'      => self::$PRP_GRP_NAME,
            'grp_address1'  => self::$PRP_GRP_ADDRESS1,
            'grp_address2'  => self::$PRP_GRP_ADDRESS2,
            'grp_address3'  => self::$PRP_GRP_ADDRESS3,
            'grp_cp'        => self::$PRP_GRP_CP,
            'grp_town'      => self::$PRP_GRP_TOWN,
            'cnty_id'       => self::$PRP_CNTY_ID,
            'lang_id'       => self::$PRP_LANG_ID,
            'grp_from'      => self::$PRP_GRP_FROM,
            'grp_to'        => self::$PRP_GRP_TO,
            'grp_parent_id' => self::$PRP_GRP_PARENT_ID,
        ];
    }

    /**
     * Set object source
     *
     * @return string
     */
    public static function getSource()
    {
        return 'sso_group';
    }
}
