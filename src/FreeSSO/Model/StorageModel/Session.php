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
        'destination' => 'sess_id',
        'type'        => FFCST::TYPE_BIGINT,
        'options'     => [FFCST::OPTION_PK]
    ];
    protected static $PRP_USER_ID = [
        'destination' => 'user_id',
        'type'        => FFCST::TYPE_BIGINT
    ];
    protected static $PRP_SESS_START = [
        'destination' => 'sess_start',
        'type'        => FFCST::TYPE_DATETIME
    ];
    protected static $PRP_SESS_END = [
        'destination' => 'sess_end',
        'type'        => FFCST::TYPE_DATETIME
    ];
    protected static $PRP_SESS_TOUCH = [
        'destination' => 'sess_touch',
        'type'        => FFCST::TYPE_DATETIME
    ];
    protected static $PRP_SESS_CONTENT = [
        'destination' => 'sess_content',
        'type'        => FFCST::TYPE_TEXT
    ];
    protected static $PRP_SESS_CLIENT_ADDR = [
        'destination' => 'sess_client_addr',
        'type'        => FFCST::TYPE_STRING
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
