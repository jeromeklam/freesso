<?php
namespace FreeSSO\Model;

use \FreeFW\Constants as FFCST;

/**
 * User
 *
 * @author jeromeklam
 */
class User extends \FreeSSO\Model\Base\User implements
    \FreeFW\Interfaces\ApiResponseInterface
{

    /**
     * 
     * @var string
     */
    const TYPE_USER      = 'USER';
    const TYPE_IP        = 'IP';
    const TYPE_UUID      = 'UUID';
    const TYPE_ANONYMOUS = 'ANONYMOUS';
    const TYPE_REST      = 'REST';

    /**
     * Groups
     * @var [\FreeSSO\Model\Group]
     */
    protected $groups = null;

    /**
     * Brokers
     * @var [\FreeSSO\Model\Broker]
     */
    protected $brokers = null;

    /**
     *
     * {@inheritDoc}
     * @see \FreeFW\Core\Model::init()
     */
    public function init()
    {
        $this->user_id     = 0;
        $this->user_salt   = md5(uniqid('test', true));
        $this->user_type   = self::TYPE_USER;
        $this->user_active = false;
        $this->createNewPassword($this->user_salt);
        return $this;
    }

    /**
     * Verify user password
     *
     * @param string $p_password
     *
     * @return boolean
     */
    public function verifyPassword($p_password)
    {
        $testPassword = md5($this->getUserSalt() . $p_password);
        if ($testPassword == $this->getUserPassword()) {
            return true;
        }
        return false;
    }

    /**
     * Create new password with new salt
     *
     * @param string $p_password
     *
     * @return \FreeSSO\Model\User
     */
    public function createNewPassword($p_password)
    {
        $this->setUserSalt(md5(uniqid()));
        $this->setUserPassword(md5($this->getUserSalt() . $p_password));
        return $this;
    }

    /**
     * Is active ?
     *
     * @return boolean
     */
    public function isActive()
    {
        if (isset($this->user_active) && ($this->user_active == 1 ||
            in_array(strtoupper($this->user_active), array('O', 'Y', '1')))) {
            return true;
        }
        return false;
    }

    /**
     * Get Groups
     * 
     * @return [\FreeSSO\Model\Group]
     */
    public function getGroups()
    {
        if ($this->groups === null) {
            $this->groups = new \FreeFW\Model\ResultSet();
            $conditions   = new \FreeFW\Model\Conditions();
            $conditions->initFromArray(['user_id' => $this->getUserId()]);
            $model  = \FreeFW\DI\DI::get('FreeSSO::Model::GroupUser');
            $query  = $model->getQuery();
            $rels   = [];
            $rels[] = 'group';
            $query
                ->addConditions($conditions)
                ->addRelations($rels)
            ;
            if ($query->execute()) {
                $this->groups = $query->getResult();
            }
        }
        return $this->groups;
    }

    /**
     * Get Brokers
     * 
     * @return \[\FreeSSO\Model\Broker]
     */
    public function getBrokers()
    {
        if ($this->brokers === null) {
            $this->brokers = new \FreeFW\Model\ResultSet();
            $conditions    = new \FreeFW\Model\Conditions();
            $conditions->initFromArray(['user_id' => $this->getUserId()]);
            $model  = \FreeFW\DI\DI::get('FreeSSO::Model::UserBroker');
            $query  = $model->getQuery();
            $rels   = [];
            $rels[] = 'broker';
            $query
                ->addConditions($conditions)
                ->addRelations($rels)
            ;
            if ($query->execute()) {
                $this->brokers = $query->getResult();
            }
        }
        return $this->brokers;
    }
}
