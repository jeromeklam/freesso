<?php
namespace FreeSSO\Model;

use \FreeFW\Constants as FFCST;

/**
 * UserBroker
 *
 * @author jeromeklam
 */
class UserBroker extends \FreeSSO\Model\Base\UserBroker
{

    /**
     * Methods
     * @var string
     */
    const METHOD_AUTO = 'AUTO';

    /**
     * Types
     * @var string
     */
    const TYPE_APP = 'APP';

    /**
     * Broker
     * @var \FreeSSO\Model\Broker
     */
    protected $broker = null;

    /**
     * User
     * @var \FreeSSO\Model\User
     */
    protected $user = null;

    /**
     *
     * {@inheritDoc}
     * @see \FreeFW\Core\Model::init()
     */
    public function init()
    {
        $this->ubrk_id = 0;
        $this->brk_id  = 0;
        $this->user_id = 0;
        return $this;
    }

    /**
     * Set broker
     * 
     * @param \FreeSSO\Model\Broker $p_broker
     * 
     * @return \FreeSSO\Model\UserBroker
     */
    public function setBroker($p_broker)
    {
        $this->broker = $p_broker;
        return $this;
    }

    /**
     * Get broker
     * 
     * @return \FreeSSO\Model\Broker
     */
    public function getBroker()
    {
        return $this->broker;
    }

    /**
     * Set user
     * 
     * @param \FreeSSO\Model\User $p_user
     * 
     * @return \FreeSSO\Model\UserBroker
     */
    public function setUser($p_user)
    {
        $this->user = $p_user;
        return $this;
    }

    /**
     * Get user
     * 
     * @return \FreeSSO\Model\User
     */
    public function getUser()
    {
        return $this->user;
    }
}
