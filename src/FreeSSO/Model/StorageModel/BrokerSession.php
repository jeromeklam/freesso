<?php
namespace FreeSSO\Model\StorageModel;

use \FreeFW\Constants as FFCST;

/**
 * Broker
 *
 * @author jeromeklam
 */
abstract class BrokerSession extends \FreeFW\Core\StorageModel
{

    /**
     * Field properties as static arrays
     * @var array
     */
    protected static $PRP_BRS_ID = [
        FFCST::PROPERTY_PRIVATE => 'brs_id',
        FFCST::PROPERTY_TYPE    => FFCST::TYPE_BIGINT,
        FFCST::PROPERTY_OPTIONS => [FFCST::OPTION_PK]
    ];
    protected static $PRP_BRK_KEY = [
        FFCST::PROPERTY_PRIVATE => 'brk_key',
        FFCST::PROPERTY_TYPE    => FFCST::TYPE_STRING,
        FFCST::PROPERTY_OPTIONS => [FFCST::OPTION_REQUIRED]
    ];
    protected static $PRP_BRS_TOKEN = [
        FFCST::PROPERTY_PRIVATE => 'brs_token',
        FFCST::PROPERTY_TYPE    => FFCST::TYPE_STRING,
        FFCST::PROPERTY_OPTIONS => [FFCST::OPTION_REQUIRED]
    ];
    protected static $PRP_BRS_SESSION_ID = [
        FFCST::PROPERTY_PRIVATE => 'brs_session_id',
        FFCST::PROPERTY_TYPE    => FFCST::TYPE_BIGINT,
        FFCST::PROPERTY_OPTIONS => [FFCST::OPTION_REQUIRED]
    ];
    protected static $PRP_BRS_CLIENT_ADDRESS = [
        FFCST::PROPERTY_PRIVATE => 'brs_client_address',
        FFCST::PROPERTY_TYPE    => FFCST::TYPE_STRING,
        FFCST::PROPERTY_OPTIONS => [FFCST::OPTION_REQUIRED]
    ];
    protected static $PRP_BRS_DATE_CREATED = [
        FFCST::PROPERTY_PRIVATE => 'brs_date_created',
        FFCST::PROPERTY_TYPE    => FFCST::TYPE_DATETIME,
        FFCST::PROPERTY_OPTIONS => [FFCST::OPTION_REQUIRED],
        FFCST::PROPERTY_DEFAULT => FFCST::DEFAULT_NOW
    ];
    protected static $PRP_BRS_END = [
        FFCST::PROPERTY_PRIVATE => 'brs_end',
        FFCST::PROPERTY_TYPE    => FFCST::TYPE_DATETIME,
        FFCST::PROPERTY_OPTIONS => [FFCST::OPTION_REQUIRED]
    ];
    protected static $PRP_SESS_ID = [
        FFCST::PROPERTY_PRIVATE => 'sess_id',
        FFCST::PROPERTY_TYPE    => FFCST::TYPE_BIGINT,
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
            'brs_id'             => self::$PRP_BRS_ID,
            'brk_key'            => self::$PRP_BRK_KEY,
            'brs_token'          => self::$PRP_BRS_TOKEN,
            'brs_session_id'     => self::$PRP_BRS_SESSION_ID,
            'brs_client_address' => self::$PRP_BRS_CLIENT_ADDRESS,
            'brs_date_created'   => self::$PRP_BRS_DATE_CREATED,
            'brs_end'            => self::$PRP_BRS_END,
            'sess_id'            => self::$PRP_SESS_ID
        ];
    }

    /**
     * Set object source
     *
     * @return string
     */
    public static function getSource()
    {
        return 'sso_broker_session';
    }
}
