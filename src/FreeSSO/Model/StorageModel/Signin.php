<?php
namespace FreeSSO\Model\StorageModel;

use \FreeFW\Constants as FFCST;

/**
 * Signin
 *
 * @author jeromeklam
 */
abstract class Signin extends \FreeFW\Core\StorageModel
{

    /**
     * Field properties as static arrays
     * @var array
     */
    protected static $PRP_LOGIN = [
        FFCST::PROPERTY_PRIVATE => 'login',
        FFCST::PROPERTY_TYPE    => FFCST::TYPE_STRING,
        FFCST::PROPERTY_OPTIONS => [FFCST::OPTION_REQUIRED],
        FFCST::PROPERTY_COMMENT => 'Le login',
        FFCST::PROPERTY_SAMPLE  => 'test@free.fr',
        FFCST::PROPERTY_MAX     => 255,
    ];
    protected static $PRP_PASSWORD = [
        FFCST::PROPERTY_PRIVATE => 'password',
        FFCST::PROPERTY_TYPE    => FFCST::TYPE_STRING,
        FFCST::PROPERTY_OPTIONS => [FFCST::OPTION_REQUIRED],
        FFCST::PROPERTY_COMMENT => 'Le mot de passe en clair',
        FFCST::PROPERTY_SAMPLE  => 'password',
        FFCST::PROPERTY_MAX     => 255,
    ];
    protected static $PRP_PASSWORD2 = [
        FFCST::PROPERTY_PRIVATE => 'password2',
        FFCST::PROPERTY_TYPE    => FFCST::TYPE_STRING,
        FFCST::PROPERTY_OPTIONS => [],
        FFCST::PROPERTY_COMMENT => 'Le mot de passe de confirmation en cas de changement',
        FFCST::PROPERTY_SAMPLE  => 'password',
        FFCST::PROPERTY_MAX     => 255,
    ];
    protected static $PRP_REMEMBER = [
        FFCST::PROPERTY_PRIVATE => 'remember',
        FFCST::PROPERTY_TYPE    => FFCST::TYPE_BOOLEAN,
        FFCST::PROPERTY_OPTIONS => [],
        FFCST::PROPERTY_COMMENT => 'Se souvenir de la connexion',
        FFCST::PROPERTY_SAMPLE  => true,
        FFCST::PROPERTY_DEFAULT => false,
    ];
    protected static $PRP_TOKEN = [
        FFCST::PROPERTY_PRIVATE => 'token',
        FFCST::PROPERTY_TYPE    => FFCST::TYPE_STRING,
        FFCST::PROPERTY_OPTIONS => [],
        FFCST::PROPERTY_COMMENT => 'Le token en cas de changement de mot de passe',
        FFCST::PROPERTY_SAMPLE  => 'jlkjljl76dsq85f6h09',
    ];

    /**
     * get properties
     *
     * @return array[]
     */
    public static function getProperties()
    {
        return [
            'login'     => self::$PRP_LOGIN,
            'password'  => self::$PRP_PASSWORD,
            'password2' => self::$PRP_PASSWORD2,
            'remember'  => self::$PRP_REMEMBER,
            'token'     => self::$PRP_TOKEN,
        ];
    }

    /**
     * Set object source
     *
     * @return string
     */
    public static function getSource()
    {
        return 'dummy_signin';
    }

    /**
     * Retourne une explication de la table
     */
    public static function getSourceComments()
    {
        return 'Structure pour la connexion et le changement de mot de passe';
    }
}
