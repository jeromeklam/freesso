<?php
namespace FreeSSO\Model\StorageModel;

use \FreeFW\Constants as FFCST;

/**
 * GroupType
 *
 * @author jeromeklam
 */
abstract class GroupType extends \FreeFW\Core\StorageModel
{

/**
 * Field properties as static arrays
 * @var array
 */
    protected static $PRP_GRPT_ID = [
        FFCST::PROPERTY_PRIVATE => 'grpt_id',
        FFCST::PROPERTY_TYPE    => FFCST::TYPE_BIGINT,
        FFCST::PROPERTY_OPTIONS => [FFCST::OPTION_REQUIRED, FFCST::OPTION_PK]
    ];
    protected static $PRP_GRPT_CODE = [
        FFCST::PROPERTY_PRIVATE => 'grpt_code',
        FFCST::PROPERTY_TYPE    => FFCST::TYPE_STRING,
        FFCST::PROPERTY_OPTIONS => []
    ];
    protected static $PRP_GRPT_NAME = [
        FFCST::PROPERTY_PRIVATE => 'grpt_name',
        FFCST::PROPERTY_TYPE    => FFCST::TYPE_STRING,
        FFCST::PROPERTY_OPTIONS => []
    ];
    protected static $PRP_GRPT_FROM = [
        FFCST::PROPERTY_PRIVATE => 'grpt_from',
        FFCST::PROPERTY_TYPE    => FFCST::TYPE_DATETIME,
        FFCST::PROPERTY_OPTIONS => []
    ];
    protected static $PRP_GRPT_TO = [
        FFCST::PROPERTY_PRIVATE => 'grpt_to',
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
            'grpt_id'   => self::$PRP_GRPT_ID,
            'grpt_code' => self::$PRP_GRPT_CODE,
            'grpt_name' => self::$PRP_GRPT_NAME,
            'grpt_from' => self::$PRP_GRPT_FROM,
            'grpt_to'   => self::$PRP_GRPT_TO
        ];
    }

    /**
     * Set object source
     *
     * @return string
     */
    public static function getSource()
    {
        return 'sso_group_type';
    }
}
