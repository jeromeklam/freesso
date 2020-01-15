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
     *
     * {@inheritDoc}
     * @see \FreeFW\Core\Model::init()
     */
    public function init()
    {
        $this->grp_id  = 0;
        $this->grpt_id = null;
        return $this;
    }

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
        $this->group = $p_group;
        return $this;
    }

    /**
     * Get group
     * 
     * @return \FreeSSO\Model\Group
     */
    public function getParent()
    {
        return $this->group;
    }
}
