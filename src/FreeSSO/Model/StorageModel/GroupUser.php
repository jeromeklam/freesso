<?php
namespace FreeSSO\Model\StorageModel;

use \FreeFW\Constants as FFCST;

/**
 * GroupUser
 *
 * @author jeromeklam
 */
abstract class GroupUser extends \FreeFW\Core\StorageModel
{

/**
 * Field properties as static arrays
 * @var array
 */
    protected static $PRP_GRU_ID = [
        FFCST::PROPERTY_PRIVATE => 'gru_id',
        FFCST::PROPERTY_TYPE    => FFCST::TYPE_BIGINT,
        FFCST::PROPERTY_OPTIONS => [FFCST::OPTION_REQUIRED, FFCST::OPTION_PK]
    ];
    protected static $PRP_GRP_ID = [
        FFCST::PROPERTY_PRIVATE => 'grp_id',
        FFCST::PROPERTY_TYPE    => FFCST::TYPE_BIGINT,
        FFCST::PROPERTY_OPTIONS => [FFCST::OPTION_REQUIRED, FFCST::OPTION_FK],
        FFCST::PROPERTY_FK      => ['group' =>
            [
                'model' => 'FreeSSO::Model::Group',
                'field' => 'grp_id',
                'type'  => \FreeFW\Model\Query::JOIN_LEFT
            ]
        ]
    ];
    protected static $PRP_USER_ID = [
        FFCST::PROPERTY_PRIVATE => 'user_id',
        FFCST::PROPERTY_TYPE    => FFCST::TYPE_BIGINT,
        FFCST::PROPERTY_OPTIONS => [FFCST::OPTION_FK],
        FFCST::PROPERTY_FK      => ['user' =>
            [
                'model' => 'FreeSSO::Model::User',
                'field' => 'user_id',
                'type'  => \FreeFW\Model\Query::JOIN_LEFT
            ]
        ]
    ];
    protected static $PRP_FCT_ID = [
        FFCST::PROPERTY_PRIVATE => 'fct_id',
        FFCST::PROPERTY_TYPE    => FFCST::TYPE_BIGINT,
        FFCST::PROPERTY_OPTIONS => [FFCST::OPTION_FK],
        FFCST::PROPERTY_FK      => ['job_function' =>
            [
                'model' => 'FreeSSO::Model::JobFunction',
                'field' => 'fct_id',
                'type'  => \FreeFW\Model\Query::JOIN_LEFT
            ]
        ]
    ];
    protected static $PRP_GRU_PRIVILEGES = [
        FFCST::PROPERTY_PRIVATE => 'gru_privileges',
        FFCST::PROPERTY_TYPE    => FFCST::TYPE_STRING,
        FFCST::PROPERTY_OPTIONS => []
    ];
    protected static $PRP_GRU_TEL1 = [
        FFCST::PROPERTY_PRIVATE => 'gru_tel1',
        FFCST::PROPERTY_TYPE    => FFCST::TYPE_STRING,
        FFCST::PROPERTY_OPTIONS => []
    ];
    protected static $PRP_GRU_TEL2 = [
        FFCST::PROPERTY_PRIVATE => 'gru_tel2',
        FFCST::PROPERTY_TYPE    => FFCST::TYPE_STRING,
        FFCST::PROPERTY_OPTIONS => []
    ];
    protected static $PRP_GRU_EMAIL = [
        FFCST::PROPERTY_PRIVATE => 'gru_email',
        FFCST::PROPERTY_TYPE    => FFCST::TYPE_STRING,
        FFCST::PROPERTY_OPTIONS => []
    ];
    protected static $PRP_GRU_FROM = [
        FFCST::PROPERTY_PRIVATE => 'gru_from',
        FFCST::PROPERTY_TYPE    => FFCST::TYPE_DATETIMETZ,
        FFCST::PROPERTY_OPTIONS => []
    ];
    protected static $PRP_GRU_TO = [
        FFCST::PROPERTY_PRIVATE => 'gru_to',
        FFCST::PROPERTY_TYPE    => FFCST::TYPE_DATETIMETZ,
        FFCST::PROPERTY_OPTIONS => []
    ];
    protected static $PRP_GRU_ACTIV = [
        FFCST::PROPERTY_PRIVATE => 'gru_activ',
        FFCST::PROPERTY_TYPE    => FFCST::TYPE_BOOLEAN,
        FFCST::PROPERTY_OPTIONS => []
    ];
    protected static $PRP_GRU_TS = [
        FFCST::PROPERTY_PRIVATE => 'gru_ts',
        FFCST::PROPERTY_TYPE    => FFCST::TYPE_DATETIMETZ,
        FFCST::PROPERTY_OPTIONS => []
    ];
    protected static $PRP_GRU_EXTERN_ID = [
        FFCST::PROPERTY_PRIVATE => 'gru_extern_id',
        FFCST::PROPERTY_TYPE    => FFCST::TYPE_STRING,
        FFCST::PROPERTY_OPTIONS => []
    ];
    protected static $PRP_GRU_INFORMATIONS = [
        FFCST::PROPERTY_PRIVATE => 'gru_informations',
        FFCST::PROPERTY_TYPE    => FFCST::TYPE_TEXT,
        FFCST::PROPERTY_OPTIONS => []
    ];
    protected static $PRP_GRU_RGPD = [
        FFCST::PROPERTY_PRIVATE => 'gru_rgpd',
        FFCST::PROPERTY_TYPE    => FFCST::TYPE_TEXT,
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
            'gru_id'           => self::$PRP_GRU_ID,
            'grp_id'           => self::$PRP_GRP_ID,
            'user_id'          => self::$PRP_USER_ID,
            'fct_id'           => self::$PRP_FCT_ID,
            'gru_privileges'   => self::$PRP_GRU_PRIVILEGES,
            'gru_tel1'         => self::$PRP_GRU_TEL1,
            'gru_tel2'         => self::$PRP_GRU_TEL2,
            'gru_email'        => self::$PRP_GRU_EMAIL,
            'gru_from'         => self::$PRP_GRU_FROM,
            'gru_to'           => self::$PRP_GRU_TO,
            'gru_activ'        => self::$PRP_GRU_ACTIV,
            'gru_ts'           => self::$PRP_GRU_TS,
            'gru_extern_id'    => self::$PRP_GRU_EXTERN_ID,
            'gru_informations' => self::$PRP_GRU_INFORMATIONS,
            'gru_rgpd'         => self::$PRP_GRU_RGPD
        ];
    }

    /**
     * Set object source
     *
     * @return string
     */
    public static function getSource()
    {
        return 'sso_group_user';
    }
}
