<?php
namespace FreeSSO\Model\StorageModel;

use \FreeFW\Constants as FFCST;

/**
 * JobFunction
 *
 * @author jeromeklam
 */
abstract class JobFunction extends \FreeFW\Core\StorageModel
{

/**
 * Field properties as static arrays
 * @var array
 */
    protected static $PRP_FCT_ID = [
        FFCST::PROPERTY_PRIVATE => 'fct_id',
        FFCST::PROPERTY_TYPE    => FFCST::TYPE_BIGINT,
        FFCST::PROPERTY_OPTIONS => [FFCST::OPTION_REQUIRED, FFCST::OPTION_PK]
    ];
    protected static $PRP_FCT_CODE = [
        FFCST::PROPERTY_PRIVATE => 'fct_code',
        FFCST::PROPERTY_TYPE    => FFCST::TYPE_STRING,
        FFCST::PROPERTY_OPTIONS => []
    ];
    protected static $PRP_FCT_NAME = [
        FFCST::PROPERTY_PRIVATE => 'fct_name',
        FFCST::PROPERTY_TYPE    => FFCST::TYPE_STRING,
        FFCST::PROPERTY_OPTIONS => []
    ];
    protected static $PRP_FCT_FROM = [
        FFCST::PROPERTY_PRIVATE => 'fct_from',
        FFCST::PROPERTY_TYPE    => FFCST::TYPE_DATETIME,
        FFCST::PROPERTY_OPTIONS => []
    ];
    protected static $PRP_FCT_TO = [
        FFCST::PROPERTY_PRIVATE => 'fct_to',
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
            'fct_id'   => self::$PRP_FCT_ID,
            'fct_code' => self::$PRP_FCT_CODE,
            'fct_name' => self::$PRP_FCT_NAME,
            'fct_from' => self::$PRP_FCT_FROM,
            'fct_to'   => self::$PRP_FCT_TO
        ];
    }

    /**
     * Set object source
     *
     * @return string
     */
    public static function getSource()
    {
        return 'sso_job_function';
    }
}
