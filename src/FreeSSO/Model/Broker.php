<?php
namespace FreeSSO\Model;

/**
 * Broker
 *
 * @author : jeromeklam
 */
class Broker extends \FreeSSO\Model\Base\Broker
{

    /**
     * Group
     * @var \FreeSSO\Model\Group
     */
    protected $group = null;

    /**
     * Domain
     * @var \FreeSSO\Model\Domain
     */
    protected $domain = null;

    /**
     *
     * {@inheritDoc}
     * @see \FreeFW\Core\Model::init()
     */
    public function init()
    {
        $this->brk_id  = 0;
        $this->brk_key = '';
        return $this;
    }

    /**
     * Is active ?
     *
     * @return boolean
     */
    public function isActive()
    {
        if (isset($this->brk_active) && ($this->brk_active== 1 ||
            in_array(strtoupper($this->brk_active), array('O', 'Y', '1')))) {
            return true;
        }
        return false;
    }

    /**
     * Verify that the required scope is present in the broker's config
     *
     * @param string $p_scope
     *
     * @return boolean
     */
    public function verifyApiScope($p_scope)
    {
        $scopes = explode(';', $this->getBrkApiScope());
        if (in_array($p_scope, $scopes) || array_key_exists($p_scope, $scopes)) {
            return true;
        }
        return false;
    }

    /**
     * Retourne tous les domaines
     *
     * @return array
     */
    public static function getAllDomains()
    {
        $arr = \FreeSSO\Model\Domain::find();
        return $arr;
    }

    /**
     * Set group
     * 
     * @param \FreeSSO\Model\Group $p_group
     * 
     * @return \FreeSSO\Model\Broker
     */
    public function setGroup($p_group)
    {
        $this->group = $p_group;
        return $this;
    }

    /**
     * Get group
     *
     * @return \FreeSSO\Model\Group
     */
    public function getGroup()
    {
        return $this->group;
    }

    /**
     * Set domain
     * 
     * @param \FreeSSO\Model\Domain $p_domain
     * 
     * @return \FreeSSO\Model\Broker
     */
    public function setDomain($p_domain)
    {
        $this->domain = $p_domain;
        return $this;
    }

    /**
     * Get domain
     *
     * @return \FreeSSO\Model\Domain
     */
    public function getDomain()
    {
        return $this->domain;
    }
}
