<?php
namespace FreeSSO\Model;

/**
 * BrokerSession
 *
 * @author : jeromeklam
 */
class BrokerSession extends \FreeSSO\Model\Base\BrokerSession implements
    \FreeFW\Interfaces\ValidatorInterface
{

    /**
     * Behaviour
     */
    use \FreeFW\Behaviour\ValidatorTrait;

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
        $this->brs_id = 0;
    }
}
