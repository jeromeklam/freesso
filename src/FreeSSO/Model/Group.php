<?php
namespace FreeSSO\Model;

use \FreeFW\Constants as FFCST;

/**
 * Group
 *
 * @author jeromeklam
 */
class Group extends \FreeSSO\Model\Base\Group
{

    /**
     * Behaviours
     */
    use \FreeFW\Model\Behaviour\Country;
    use \FreeFW\Model\Behaviour\Lang;

    /**
     * GroupType
     * @var \FreeSSO\Model\GroupType
     */
    protected $group_type = null;

    /**
     * Parent group
     * @var \FreeSSO\Model\Group
     */
    protected $parent = null;

    /**
     * Parent realm
     * @var \FreeSSO\Model\Group
     */
    protected $realm = null;

    /**
     * Set group type
     *
     * @param \FreeSSO\Model\GroupType $p_group_type
     *
     * @return \FreeSSO\Model\Group
     */
    public function setGroupType($p_group_type)
    {
        $this->group_type = $p_group_type;
        return $this;
    }

    /**
     * Get group_type
     *
     * @return \FreeSSO\Model\GroupType
     */
    public function getGroupType()
    {
        return $this->group_type;
    }

    /**
     * Set parent
     *
     * @param \FreeSSO\Model\Group $p_group
     *
     * @return \FreeSSO\Model\Group
     */
    public function setParent($p_group)
    {
        $this->parent = $p_group;
        return $this;
    }

    /**
     * Get group
     *
     * @return \FreeSSO\Model\Group
     */
    public function getParent()
    {
        return $this->parent;
    }

    /**
     * Set realm
     *
     * @param \FreeSSO\Model\Group $p_realm
     *
     * @return \FreeSSO\Model\Group
     */
    public function setRealm($p_realm)
    {
        $this->realm = $p_realm;
        return $this;
    }

    /**
     * Get group
     *
     * @return \FreeSSO\Model\Group
     */
    public function getRealm()
    {
        return $this->realm;
    }

    /**
     * On create
     *
     * @return boolean
     */
    public function afterCreate()
    {
        if ($this->getGrpParentId() === null || $this->getGrpParentId() <= 0) {
            $this->setGrpRealmId($this->getGrpId());
        } else {
            $this->setGrpRealmId($this->getGrpParentId());
        }
        return $this->save();
    }
}
