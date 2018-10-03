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
        'destination' => 'brs_id',
        'type'        => FFCST::TYPE_BIGINT,
        'options'     => [FFCST::OPTION_PK]
    ];
    protected static $PRP_BRK_KEY = [
        'destination' => 'brk_key',
        'type'        => FFCST::TYPE_STRING,
        'options'     => [FFCST::OPTION_REQUIRED]
    ];
    protected static $PRP_BRS_TOKEN = [
        'destination' => 'brs_token',
        'type'        => FFCST::TYPE_STRING,
        'options'     => [FFCST::OPTION_REQUIRED]
    ];
    protected static $PRP_BRS_SESSION_ID = [
        'destination' => 'brs_session_id',
        'type'        => FFCST::TYPE_BIGINT,
        'options'     => [FFCST::OPTION_REQUIRED]
    ];
    protected static $PRP_BRS_CLIENT_ADDRESS = [
        'destination' => 'brs_client_address',
        'type'        => FFCST::TYPE_STRING,
        'options'     => [FFCST::OPTION_REQUIRED]
    ];
    protected static $PRP_BRS_DATE_CREATED = [
        'destination' => 'brs_date_created',
        'type'        => FFCST::TYPE_DATETIME,
        'options'     => [FFCST::OPTION_REQUIRED]
    ];
    protected static $PRP_BRS_END = [
        'destination' => 'brs_end',
        'type'        => FFCST::TYPE_DATETIME,
        'options'     => [FFCST::OPTION_REQUIRED]
    ];
    protected static $PRP_SESS_ID = [
        'destination' => 'sess_id',
        'type'        => FFCST::TYPE_BIGINT,
        'options'     => [FFCST::OPTION_REQUIRED]
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
