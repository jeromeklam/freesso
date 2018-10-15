<?php
namespace FreeSSO\Model\StorageModel;

use \FreeFW\Constants as FFCST;

/**
 * User
 *
 * @author jeromeklam
 */
abstract class User extends \FreeFW\Core\StorageModel
{

/**
 * Field properties as static arrays
 * @var array
 */
    protected static $PRP_USER_ID = [
        FFCST::PROPERTY_PRIVATE => 'user_id',
        FFCST::PROPERTY_TYPE    => FFCST::TYPE_BIGINT,
        FFCST::PROPERTY_OPTIONS => [FFCST::OPTION_REQUIRED, FFCST::OPTION_PK]
    ];
    protected static $PRP_USER_LOGIN = [
        FFCST::PROPERTY_PRIVATE => 'user_login',
        FFCST::PROPERTY_TYPE    => FFCST::TYPE_STRING,
        FFCST::PROPERTY_OPTIONS => [FFCST::OPTION_REQUIRED]
    ];
    protected static $PRP_USER_PASSWORD = [
        FFCST::PROPERTY_PRIVATE => 'user_password',
        FFCST::PROPERTY_TYPE    => FFCST::TYPE_STRING,
        FFCST::PROPERTY_OPTIONS => [FFCST::OPTION_REQUIRED]
    ];
    protected static $PRP_USER_ACTIVE = [
        FFCST::PROPERTY_PRIVATE => 'user_active',
        FFCST::PROPERTY_TYPE    => FFCST::TYPE_INTEGER,
        FFCST::PROPERTY_OPTIONS => [FFCST::OPTION_REQUIRED]
    ];
    protected static $PRP_USER_SALT = [
        FFCST::PROPERTY_PRIVATE => 'user_salt',
        FFCST::PROPERTY_TYPE    => FFCST::TYPE_STRING,
        FFCST::PROPERTY_OPTIONS => [FFCST::OPTION_REQUIRED]
    ];
    protected static $PRP_USER_EMAIL = [
        FFCST::PROPERTY_PRIVATE => 'user_email',
        FFCST::PROPERTY_TYPE    => FFCST::TYPE_STRING,
        FFCST::PROPERTY_OPTIONS => []
    ];
    protected static $PRP_USER_FIRST_NAME = [
        FFCST::PROPERTY_PRIVATE => 'user_first_name',
        FFCST::PROPERTY_TYPE    => FFCST::TYPE_STRING,
        FFCST::PROPERTY_OPTIONS => []
    ];
    protected static $PRP_USER_LAST_NAME = [
        FFCST::PROPERTY_PRIVATE => 'user_last_name',
        FFCST::PROPERTY_TYPE    => FFCST::TYPE_STRING,
        FFCST::PROPERTY_OPTIONS => []
    ];
    protected static $PRP_USER_TITLE = [
        FFCST::PROPERTY_PRIVATE => 'user_title',
        FFCST::PROPERTY_TYPE    => FFCST::TYPE_STRING,
        FFCST::PROPERTY_OPTIONS => [FFCST::OPTION_REQUIRED]
    ];
    protected static $PRP_USER_ROLES = [
        FFCST::PROPERTY_PRIVATE => 'user_roles',
        FFCST::PROPERTY_TYPE    => FFCST::TYPE_BLOB,
        FFCST::PROPERTY_OPTIONS => []
    ];
    protected static $PRP_USER_TYPE = [
        FFCST::PROPERTY_PRIVATE => 'user_type',
        FFCST::PROPERTY_TYPE    => FFCST::TYPE_STRING,
        FFCST::PROPERTY_OPTIONS => [FFCST::OPTION_REQUIRED]
    ];
    protected static $PRP_USER_IPS = [
        FFCST::PROPERTY_PRIVATE => 'user_ips',
        FFCST::PROPERTY_TYPE    => FFCST::TYPE_BLOB,
        FFCST::PROPERTY_OPTIONS => []
    ];
    protected static $PRP_USER_LAST_UPDATE = [
        FFCST::PROPERTY_PRIVATE => 'user_last_update',
        FFCST::PROPERTY_TYPE    => FFCST::TYPE_DATETIME,
        FFCST::PROPERTY_OPTIONS => []
    ];
    protected static $PRP_USER_PREFERRED_LANGUAGE = [
        FFCST::PROPERTY_PRIVATE => 'user_preferred_language',
        FFCST::PROPERTY_TYPE    => FFCST::TYPE_STRING,
        FFCST::PROPERTY_OPTIONS => []
    ];
    protected static $PRP_USER_AVATAR = [
        FFCST::PROPERTY_PRIVATE => 'user_avatar',
        FFCST::PROPERTY_TYPE    => FFCST::TYPE_BLOB,
        FFCST::PROPERTY_OPTIONS => []
    ];
    protected static $PRP_USER_CACHE = [
        FFCST::PROPERTY_PRIVATE => 'user_cache',
        FFCST::PROPERTY_TYPE    => FFCST::TYPE_BLOB,
        FFCST::PROPERTY_OPTIONS => []
    ];
    protected static $PRP_USER_VAL_STRING = [
        FFCST::PROPERTY_PRIVATE => 'user_val_string',
        FFCST::PROPERTY_TYPE    => FFCST::TYPE_STRING,
        FFCST::PROPERTY_OPTIONS => []
    ];
    protected static $PRP_USER_VAL_END = [
        FFCST::PROPERTY_PRIVATE => 'user_val_end',
        FFCST::PROPERTY_TYPE    => FFCST::TYPE_DATETIME,
        FFCST::PROPERTY_OPTIONS => []
    ];
    protected static $PRP_USER_VAL_LOGIN = [
        FFCST::PROPERTY_PRIVATE => 'user_val_login',
        FFCST::PROPERTY_TYPE    => FFCST::TYPE_STRING,
        FFCST::PROPERTY_OPTIONS => []
    ];
    protected static $PRP_USER_CNX = [
        FFCST::PROPERTY_PRIVATE => 'user_cnx',
        FFCST::PROPERTY_TYPE    => FFCST::TYPE_BLOB,
        FFCST::PROPERTY_OPTIONS => []
    ];
    protected static $PRP_USER_EXTERN_CODE = [
        FFCST::PROPERTY_PRIVATE => 'user_extern_code',
        FFCST::PROPERTY_TYPE    => FFCST::TYPE_STRING,
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
            'user_id'                 => $PRP_USER_ID,
            'user_login'              => $PRP_USER_LOGIN,
            'user_password'           => $PRP_USER_PASSWORD,
            'user_active'             => $PRP_USER_ACTIVE,
            'user_salt'               => $PRP_USER_SALT,
            'user_email'              => $PRP_USER_EMAIL,
            'user_first_name'         => $PRP_USER_FIRST_NAME,
            'user_last_name'          => $PRP_USER_LAST_NAME,
            'user_title'              => $PRP_USER_TITLE,
            'user_roles'              => $PRP_USER_ROLES,
            'user_type'               => $PRP_USER_TYPE,
            'user_ips'                => $PRP_USER_IPS,
            'user_last_update'        => $PRP_USER_LAST_UPDATE,
            'user_preferred_language' => $PRP_USER_PREFERRED_LANGUAGE,
            'user_avatar'             => $PRP_USER_AVATAR,
            'user_cache'              => $PRP_USER_CACHE,
            'user_val_string'         => $PRP_USER_VAL_STRING,
            'user_val_end'            => $PRP_USER_VAL_END,
            'user_val_login'          => $PRP_USER_VAL_LOGIN,
            'user_cnx'                => $PRP_USER_CNX,
            'user_extern_code'        => $PRP_USER_EXTERN_CODE
        ];
    }

    /**
     * Set object source
     *
     * @return string
     */
    public static function getSource()
    {
        return 'sso_user';
    }
}
