<?php
namespace FreeSSO\Model\Base;

/**
 * Group
 *
 * @author jeromeklam
 */
abstract class Group extends \FreeSSO\Model\StorageModel\Group
{

    /**
     * grp_id
     * @var int
     */
    protected $grp_id = null;

    /**
     * grpt_id
     * @var int
     */
    protected $grpt_id = null;

    /**
     * grp_code
     * @var string
     */
    protected $grp_code = null;

    /**
     * grp_name
     * @var string
     */
    protected $grp_name = null;

    /**
     * grp_address1
     * @var string
     */
    protected $grp_address1 = null;

    /**
     * grp_address2
     * @var string
     */
    protected $grp_address2 = null;

    /**
     * grp_address3
     * @var string
     */
    protected $grp_address3 = null;

    /**
     * grp_cp
     * @var string
     */
    protected $grp_cp = null;

    /**
     * grp_town
     * @var string
     */
    protected $grp_town = null;

    /**
     * cnty_id
     * @var int
     */
    protected $cnty_id = null;

    /**
     * lang_id
     * @var int
     */
    protected $lang_id = null;

    /**
     * grp_from
     * @var string
     */
    protected $grp_from = null;

    /**
     * grp_to
     * @var string
     */
    protected $grp_to = null;

    /**
     * grp_parent_id
     * @var int
     */
    protected $grp_parent_id = null;

    /**
     * Set grp_id
     *
     * @param int $p_value
     *
     * @return \FreeSSO\Model\Group
     */
    public function setGrpId($p_value)
    {
        $this->grp_id = $p_value;
        return $this;
    }

    /**
     * Get grp_id
     *
     * @return int
     */
    public function getGrpId()
    {
        return $this->grp_id;
    }

    /**
     * Set grpt_id
     *
     * @param int $p_value
     *
     * @return \FreeSSO\Model\Group
     */
    public function setGrptId($p_value)
    {
        $this->grpt_id = $p_value;
        return $this;
    }

    /**
     * Get grpt_id
     *
     * @return int
     */
    public function getGrptId()
    {
        return $this->grpt_id;
    }

    /**
     * Set grp_code
     *
     * @param string $p_value
     *
     * @return \FreeSSO\Model\Group
     */
    public function setGrpCode($p_value)
    {
        $this->grp_code = $p_value;
        return $this;
    }

    /**
     * Get grp_code
     *
     * @return string
     */
    public function getGrpCode()
    {
        return $this->grp_code;
    }

    /**
     * Set grp_name
     *
     * @param string $p_value
     *
     * @return \FreeSSO\Model\Group
     */
    public function setGrpName($p_value)
    {
        $this->grp_name = $p_value;
        return $this;
    }

    /**
     * Get grp_name
     *
     * @return string
     */
    public function getGrpName()
    {
        return $this->grp_name;
    }

    /**
     * Set grp_address1
     *
     * @param string $p_value
     *
     * @return \FreeSSO\Model\Group
     */
    public function setGrpAddress1($p_value)
    {
        $this->grp_address1 = $p_value;
        return $this;
    }

    /**
     * Get grp_address1
     *
     * @return string
     */
    public function getGrpAddress1()
    {
        return $this->grp_address1;
    }

    /**
     * Set grp_address2
     *
     * @param string $p_value
     *
     * @return \FreeSSO\Model\Group
     */
    public function setGrpAddress2($p_value)
    {
        $this->grp_address2 = $p_value;
        return $this;
    }

    /**
     * Get grp_address2
     *
     * @return string
     */
    public function getGrpAddress2()
    {
        return $this->grp_address2;
    }

    /**
     * Set grp_address3
     *
     * @param string $p_value
     *
     * @return \FreeSSO\Model\Group
     */
    public function setGrpAddress3($p_value)
    {
        $this->grp_address3 = $p_value;
        return $this;
    }

    /**
     * Get grp_address3
     *
     * @return string
     */
    public function getGrpAddress3()
    {
        return $this->grp_address3;
    }

    /**
     * Set grp_cp
     *
     * @param string $p_value
     *
     * @return \FreeSSO\Model\Group
     */
    public function setGrpCp($p_value)
    {
        $this->grp_cp = $p_value;
        return $this;
    }

    /**
     * Get grp_cp
     *
     * @return string
     */
    public function getGrpCp()
    {
        return $this->grp_cp;
    }

    /**
     * Set grp_town
     *
     * @param string $p_value
     *
     * @return \FreeSSO\Model\Group
     */
    public function setGrpTown($p_value)
    {
        $this->grp_town = $p_value;
        return $this;
    }

    /**
     * Get grp_town
     *
     * @return string
     */
    public function getGrpTown()
    {
        return $this->grp_town;
    }

    /**
     * Set cnty_id
     *
     * @param int $p_value
     *
     * @return \FreeSSO\Model\Group
     */
    public function setCntyId($p_value)
    {
        $this->cnty_id = $p_value;
        return $this;
    }

    /**
     * Get cnty_id
     *
     * @return int
     */
    public function getCntyId()
    {
        return $this->cnty_id;
    }

    /**
     * Set lang_id
     *
     * @param int $p_value
     *
     * @return \FreeSSO\Model\Group
     */
    public function setLangId($p_value)
    {
        $this->lang_id = $p_value;
        return $this;
    }

    /**
     * Get lang_id
     *
     * @return int
     */
    public function getLangId()
    {
        return $this->lang_id;
    }

    /**
     * Set grp_from
     *
     * @param string $p_value
     *
     * @return \FreeSSO\Model\Group
     */
    public function setGrpFrom($p_value)
    {
        $this->grp_from = $p_value;
        return $this;
    }

    /**
     * Get grp_from
     *
     * @return string
     */
    public function getGrpFrom()
    {
        return $this->grp_from;
    }

    /**
     * Set grp_to
     *
     * @param string $p_value
     *
     * @return \FreeSSO\Model\Group
     */
    public function setGrpTo($p_value)
    {
        $this->grp_to = $p_value;
        return $this;
    }

    /**
     * Get grp_to
     *
     * @return string
     */
    public function getGrpTo()
    {
        return $this->grp_to;
    }

    /**
     * Set parent group
     * 
     * @param int $p_value
     * 
     * @return \FreeSSO\Model\Base\Group
     */
    public function setGrpParentId($p_value)
    {
        $this->grp_parent_id = $p_value;
        return $this;
    }

    /**
     * Get parent group
     * 
     * @return int
     */
    public function getGrpParentId()
    {
        return $this->grp_parent_id;
    }
}
