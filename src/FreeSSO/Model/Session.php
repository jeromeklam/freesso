<?php
/**
 * ... ...
 * @author jeromeklam
 */
namespace FreeSSO\Model;

/**
 * Classe : Session
 * @author : jeromeklam
 */
class Session extends \FreeSSO\Model\Base\Session
{

    /**
     * Validate model
     *
     * @return void
     */
    protected function validate()
    {
    }

    /**
     *
     * {@inheritDoc}
     * @see \FreeFW\Core\Model::init()
     */
    public function init()
    {
        $this->sess_id = 0;
        return $this;
    }
}
