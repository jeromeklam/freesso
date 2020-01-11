<?php
namespace FreeSSO\Model\Base;

/**
 * GroupUser
 *
 * @author jeromeklam
 */
abstract class GroupUser extends \FreeSSO\Model\StorageModel\GroupUser
{

    /**
     * gru_id
     * @var int
     */
    protected $gru_id = null;

    /**
     * grp_id
     * @var int
     */
    protected $grp_id = null;

    /**
     * user_id
     * @var int
     */
    protected $user_id = null;

    /**
     * fct_id
     * @var int
     */
    protected $fct_id = null;

    /**
     * gru_privileges
     * @var string
     */
    protected $gru_privileges = null;

    /**
     * gru_tel1
     * @var string
     */
    protected $gru_tel1 = null;

    /**
     * gru_tel2
     * @var string
     */
    protected $gru_tel2 = null;

    /**
     * gru_email
     * @var string
     */
    protected $gru_email = null;

    /**
     * gru_from
     * @var string
     */
    protected $gru_from = null;

    /**
     * gru_to
     * @var string
     */
    protected $gru_to = null;

    /**
     * gru_activ
     * @var int
     */
    protected $gru_activ = null;

    /**
     * Set gru_id
     *
     * @param int $p_value
     *
     * @return \FreeSSO\Model\GroupUser
     */
    public function setGruId($p_value)
    {
        $this->gru_id = $p_value;
        return $this;
    }

    /**
     * Get gru_id
     *
     * @return int
     */
    public function getGruId()
    {
        return $this->gru_id;
    }

    /**
     * Set grp_id
     *
     * @param int $p_value
     *
     * @return \FreeSSO\Model\GroupUser
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
     * Set user_id
     *
     * @param int $p_value
     *
     * @return \FreeSSO\Model\GroupUser
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
     * Set fct_id
     *
     * @param int $p_value
     *
     * @return \FreeSSO\Model\GroupUser
     */
    public function setFctId($p_value)
    {
        $this->fct_id = $p_value;
        return $this;
    }

    /**
     * Get fct_id
     *
     * @return int
     */
    public function getFctId()
    {
        return $this->fct_id;
    }

    /**
     * Set gru_privileges
     *
     * @param string $p_value
     *
     * @return \FreeSSO\Model\GroupUser
     */
    public function setGruPrivileges($p_value)
    {
        $this->gru_privileges = $p_value;
        return $this;
    }

    /**
     * Get gru_privileges
     *
     * @return string
     */
    public function getGruPrivileges()
    {
        return $this->gru_privileges;
    }

    /**
     * Set gru_tel1
     *
     * @param string $p_value
     *
     * @return \FreeSSO\Model\GroupUser
     */
    public function setGruTel1($p_value)
    {
        $this->gru_tel1 = $p_value;
        return $this;
    }

    /**
     * Get gru_tel1
     *
     * @return string
     */
    public function getGruTel1()
    {
        return $this->gru_tel1;
    }

    /**
     * Set gru_tel2
     *
     * @param string $p_value
     *
     * @return \FreeSSO\Model\GroupUser
     */
    public function setGruTel2($p_value)
    {
        $this->gru_tel2 = $p_value;
        return $this;
    }

    /**
     * Get gru_tel2
     *
     * @return string
     */
    public function getGruTel2()
    {
        return $this->gru_tel2;
    }

    /**
     * Set gru_email
     *
     * @param string $p_value
     *
     * @return \FreeSSO\Model\GroupUser
     */
    public function setGruEmail($p_value)
    {
        $this->gru_email = $p_value;
        return $this;
    }

    /**
     * Get gru_email
     *
     * @return string
     */
    public function getGruEmail()
    {
        return $this->gru_email;
    }

    /**
     * Set gru_from
     *
     * @param string $p_value
     *
     * @return \FreeSSO\Model\GroupUser
     */
    public function setGruFrom($p_value)
    {
        $this->gru_from = $p_value;
        return $this;
    }

    /**
     * Get gru_from
     *
     * @return string
     */
    public function getGruFrom()
    {
        return $this->gru_from;
    }

    /**
     * Set gru_to
     *
     * @param string $p_value
     *
     * @return \FreeSSO\Model\GroupUser
     */
    public function setGruTo($p_value)
    {
        $this->gru_to = $p_value;
        return $this;
    }

    /**
     * Get gru_to
     *
     * @return string
     */
    public function getGruTo()
    {
        return $this->gru_to;
    }

    /**
     * Set gru_activ
     *
     * @param int $p_value
     *
     * @return \FreeSSO\Model\GroupUser
     */
    public function setGruActiv($p_value)
    {
        $this->gru_activ = $p_value;
        return $this;
    }

    /**
     * Get gru_activ
     *
     * @return int
     */
    public function getGruActiv()
    {
        return $this->gru_activ;
    }
}
