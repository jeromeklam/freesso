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
        FFCST::PROPERTY_PRIVATE => 'dom_id',
        FFCST::PROPERTY_TYPE    => FFCST::TYPE_BIGINT,
        FFCST::PROPERTY_OPTIONS => [FFCST::OPTION_PK]
    ];
    protected static $PRP_DOM_KEY = [
        FFCST::PROPERTY_PRIVATE => 'dom_key',
        FFCST::PROPERTY_TYPE    => FFCST::TYPE_MD5,
        FFCST::PROPERTY_OPTIONS => [FFCST::OPTION_REQUIRED]
    ];
    protected static $PRP_DOM_NAME = [
        FFCST::PROPERTY_PRIVATE => 'dom_name',
        FFCST::PROPERTY_TYPE    => FFCST::TYPE_STRING,
        FFCST::PROPERTY_OPTIONS => [FFCST::OPTION_REQUIRED]
    ];
    protected static $PRP_DOM_CONCURRENT_USER = [
        FFCST::PROPERTY_PRIVATE => 'dom_concurrent_user',
        FFCST::PROPERTY_TYPE    => FFCST::TYPE_INTEGER,
        FFCST::PROPERTY_OPTIONS => [FFCST::OPTION_REQUIRED]
    ];
    protected static $PRP_DOM_MAINTAIN_SECONDS = [
        FFCST::PROPERTY_PRIVATE => 'dom_maintain_seconds',
        FFCST::PROPERTY_TYPE    => FFCST::TYPE_INTEGER,
        FFCST::PROPERTY_OPTIONS => [FFCST::OPTION_REQUIRED]
    ];
    protected static $PRP_DOM_SESSION_MINUTES = [
        FFCST::PROPERTY_PRIVATE => 'dom_session_minutes',
        FFCST::PROPERTY_TYPE    => FFCST::TYPE_INTEGER,
        FFCST::PROPERTY_OPTIONS => [FFCST::OPTION_REQUIRED]
    ];
    protected static $PRP_DOM_SITES = [
        FFCST::PROPERTY_PRIVATE => 'dom_sites',
        FFCST::PROPERTY_TYPE    => FFCST::TYPE_TEXT
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
