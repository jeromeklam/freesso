<?php
namespace FreeSSO\Model\Base;

/**
 * AutologinCookie
 *
 * @author jeromeklam
 */
abstract class AutologinCookie extends \FreeSSO\Model\StorageModel\AutologinCookie
{

    /**
     * user_id
     * @var int
     */
    protected $user_id = null;

    /**
     * auto_cookie
     * @var string
     */
    protected $auto_cookie = null;

    /**
     * auto_ip
     * @var string
     */
    protected $auto_ip = null;

    /**
     * auto_paswd
     * @var string
     */
    protected $auto_paswd = null;

    /**
     * Set user_id
     *
     * @param int $p_value
     *
     * @return \FreeSSO\Model\AutologinCookie
     */
    public function setUserId($p_value)
    {
        $this->user_id = $p_value;
        return $this;
    }

    /**
     * Get user_id
     *
     * @return int
     */
    public function getUserId()
    {
        return $this->user_id;
    }

    /**
     * Set auto_cookie
     *
     * @param string $p_value
     *
     * @return \FreeSSO\Model\AutologinCookie
     */
    public function setAutoCookie($p_value)
    {
        $this->auto_cookie = $p_value;
        return $this;
    }

    /**
     * Get auto_cookie
     *
     * @return string
     */
    public function getAutoCookie()
    {
        return $this->auto_cookie;
    }

    /**
     * Set auto_ip
     *
     * @param string $p_value
     *
     * @return \FreeSSO\Model\AutologinCookie
     */
    public function setAutoIp($p_value)
    {
        $this->auto_ip = $p_value;
        return $this;
    }

    /**
     * Get auto_ip
     *
     * @return string
     */
    public function getAutoIp()
    {
        return $this->auto_ip;
    }

    /**
     * Set auto_paswd
     *
     * @param string $p_value
     *
     * @return \FreeSSO\Model\AutologinCookie
     */
    public function setAutoPaswd($p_value)
    {
        $this->auto_paswd = $p_value;
        return $this;
    }

    /**
     * Get auto_paswd
     *
     * @return string
     */
    public function getAutoPaswd()
    {
        return $this->auto_paswd;
    }
}
