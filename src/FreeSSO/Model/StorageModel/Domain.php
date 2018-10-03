<?php
namespace FreeSSO\Model\StorageModel;

use \FreeFW\Constants as FFCST;

/**
 * Domain
 *
 * @author jeromeklam
 */
abstract class Domain extends \FreeFW\Core\StorageModel
{

    /**
     * Field properties as static arrays
     * @var array
     */
    protected static $PRP_DOM_ID = [
        'destination' => 'dom_id',
        'type'        => FFCST::TYPE_BIGINT,
        'options'     => [FFCST::OPTION_PK]
    ];
    protected static $PRP_DOM_KEY = [
        'destination' => 'dom_key',
        'type'        => FFCST::TYPE_MD5,
        'options'     => [FFCST::OPTION_REQUIRED]
    ];
    protected static $PRP_DOM_NAME = [
        'destination' => 'dom_name',
        'type'        => FFCST::TYPE_STRING,
        'options'     => [FFCST::OPTION_REQUIRED]
    ];
    protected static $PRP_DOM_CONCURRENT_USER = [
        'destination' => 'dom_concurrent_user',
        'type'        => FFCST::TYPE_INTEGER,
        'options'     => [FFCST::OPTION_REQUIRED]
    ];
    protected static $PRP_DOM_MAINTAIN_SECONDS = [
        'destination' => 'dom_maintain_seconds',
        'type'        => FFCST::TYPE_INTEGER,
        'options'     => [FFCST::OPTION_REQUIRED]
    ];
    protected static $PRP_DOM_SESSION_MINUTES = [
        'destination' => 'dom_session_minutes',
        'type'        => FFCST::TYPE_INTEGER,
        'options'     => [FFCST::OPTION_REQUIRED]
    ];
    protected static $PRP_DOM_SITES = [
        'destination' => 'dom_sites',
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
            'dom_id'               => self::$PRP_DOM_ID,
            'dom_key'              => self::$PRP_DOM_KEY,
            'dom_name'             => self::$PRP_DOM_NAME,
            'dom_concurrent_user'  => self::$PRP_DOM_CONCURRENT_USER,
            'dom_maintain_seconds' => self::$PRP_DOM_MAINTAIN_SECONDS,
            'dom_session_minutes'  => self::$PRP_DOM_SESSION_MINUTES,
            'dom_sites'            => self::$PRP_DOM_SITES
        ];
    }

    /**
     * Set object source
     *
     * @return string
     */
    public static function getSource()
    {
        return 'sso_domain';
    }
}
