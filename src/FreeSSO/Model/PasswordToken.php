<?php
namespace FreeSSO\Model;

/**
 * PasswordToken
 *
 * @author jeromeklam
 */
class PasswordToken extends \FreeSSO\Model\Base\PasswordToken
{

    /**
     * User
     * @var \FreeSSO\Model\User
     */
    protected $user = null;

    /**
     * Set user
     *
     * @param \FreeSSO\Model\User $p_user
     *
     * @return \FreeSSO\Model\PasswordToken
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
