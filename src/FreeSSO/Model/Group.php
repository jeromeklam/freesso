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
     * Country
     * @var \FreeFW\Model\Country
     */
    protected $country = null;

    /**
     * Lang
     * @var \FreeFW\Model\Lang
     */
    protected $lang = null;

    /**
     *
     * {@inheritDoc}
     * @see \FreeFW\Core\Model::init()
     */
    public function init()
    {
        $this->grp_id          = 0;
        $this->grpt_id         = null;
        $this->grp_parent_id   = null;
        $this->cnty_id         = null;
        $this->lang_id         = null;
        $this->grp_money_code  = 'EUR';
        $this->grp_money_input = 'EUR';
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
     * Set country
     * 
     * @param \FreeFW\Model\Country $p_country
     * 
     * @return \FreeSSO\Model\Group
     */
    public function setCountry($p_country)
    {
        $this->country = $p_country;
        return $this;
    }

    /**
     * Get country
     * 
     * @return \FreeFW\Model\Country
     */
    public function getCountry()
    {
        return $this->country;
    }

    /**
     * Set lang
     * 
     * @param \FreeFW\Model\Lang $p_lang
     * 
     * @return \FreeSSO\Model\Group
     */
    public function setLang($p_lang)
    {
        $this->lang = $p_lang;
        return $this;
    }

    /**
     * Get lang
     * 
     * @return \FreeFW\Model\Lang
     */
    public function getLang()
    {
        return $this->lang;
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
        $this->save();
        return true;
    }
}
