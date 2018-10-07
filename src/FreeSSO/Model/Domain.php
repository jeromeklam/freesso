<?php
namespace FreeSSO\Model;

/**
 * Domain
 *
 * @author : jeromeklam
 */
class Domain extends \FreeSSO\Model\Base\Domain
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
        $this->dom_id = 0;
        return $this;
    }
}
