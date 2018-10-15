<?php
namespace FreeSSO\Model\StorageModel;

use \FreeFW\Constants as FFCST;

/**
 * Session
 *
 * @author jeromeklam
 */
abstract class Session extends \FreeFW\Core\StorageModel
{

    /**
     * Field properties as static arrays
     * @var array
     */
    protected static $PRP_SESS_ID = [
        FFCST::PROPERTY_PRIVATE => 'sess_id',
        FFCST::PROPERTY_TYPE    => FFCST::TYPE_BIGINT,
        FFCST::PROPERTY_OPTIONS => [FFCST::OPTION_PK]
    ];
    protected static $PRP_USER_ID = [
        FFCST::PROPERTY_PRIVATE => 'user_id',
        FFCST::PROPERTY_TYPE    => FFCST::TYPE_BIGINT
    ];
    protected static $PRP_SESS_START = [
        FFCST::PROPERTY_PRIVATE => 'sess_start',
        FFCST::PROPERTY_TYPE    => FFCST::TYPE_DATETIME
    ];
    protected static $PRP_SESS_END = [
        FFCST::PROPERTY_PRIVATE => 'sess_end',
        FFCST::PROPERTY_TYPE    => FFCST::TYPE_DATETIME
    ];
    protected static $PRP_SESS_TOUCH = [
        FFCST::PROPERTY_PRIVATE => 'sess_touch',
        FFCST::PROPERTY_TYPE    => FFCST::TYPE_DATETIME
    ];
    protected static $PRP_SESS_CONTENT = [
        FFCST::PROPERTY_PRIVATE => 'sess_content',
        FFCST::PROPERTY_TYPE    => FFCST::TYPE_TEXT
    ];
    protected static $PRP_SESS_CLIENT_ADDR = [
        FFCST::PROPERTY_PRIVATE => 'sess_client_addr',
        FFCST::PROPERTY_TYPE    => FFCST::TYPE_STRING
    ];

    /**
     * get properties
     *
     * @return array[]
     */
    public static function getProperties()
    {
        return [
            'sess_id'          => self::$PRP_SESS_ID,
            'user_id'          => self::$PRP_USER_ID,
            'sess_start'       => self::$PRP_SESS_START,
            'sess_end'         => self::$PRP_SESS_END,
            'sess_touch'       => self::$PRP_SESS_TOUCH,
            'sess_content'     => self::$PRP_SESS_CONTENT,
            'sess_client_addr' => self::$PRP_SESS_CLIENT_ADDR
        ];
    }

    /**
     * Set object source
     *
     * @return string
     */
    public static function getSource()
    {
        return 'sso_session';
    }
}
