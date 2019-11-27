<?php
namespace FreeSSO\Model\Base;

/**
 * Signin
 *
 * @author jeromeklam
 */
abstract class Signin extends \FreeSSO\Model\StorageModel\Signin
{

    /**
     * login
     * @var string
     */
    protected $login = null;

    /**
     * password
     * @var string
     */
    protected $password = null;

    /**
     * remember
     * @var int
     */
    protected $remember = null;

    /**
     * Set login
     *
     * @param string $p_value
     *
     * @return \FreeSSO\Model\Signin
     */
    public function setLogin($p_value)
    {
        $this->login = $p_value;
        return $this;
    }

    /**
     * Get login
     *
     * @return string
     */
    public function getLogin()
    {
        return $this->login;
    }

    /**
     * Set password
     *
     * @param string $p_value
     *
     * @return \FreeSSO\Model\Signin
     */
    public function setPassword($p_value)
    {
        $this->password = $p_value;
        return $this;
    }

    /**
     * Get password
     *
     * @return string
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * Set remember
     *
     * @param int $p_value
     *
     * @return \FreeSSO\Model\Signin
     */
    public function setRemember($p_value)
    {
        $this->remember = $p_value;
        return $this;
    }

    /**
     * Get remember
     *
     * @return int
     */
    public function getRemember()
    {
        return $this->remember;
    }
}
