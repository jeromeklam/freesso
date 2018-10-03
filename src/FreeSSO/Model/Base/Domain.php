<?php
namespace FreeSSO\Model\Base;

/**
 * Domain
 *
 * @author jeromeklam
 */
abstract class Domain extends \FreeSSO\Model\StorageModel\Domain
{

    protected $dom_id = 0;
    protected $dom_key = null;
    protected $dom_name = null;
    protected $dom_concurrent_user = null;
    protected $dom_maintain_seconds = null;
    protected $dom_session_minutes = null;
    protected $dom_sites = null;
}
