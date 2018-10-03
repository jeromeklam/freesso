<?php
namespace FreeSSO\Model\Base;

/**
 * Broker
 *
 * @author jeromeklam
 */
abstract class Broker extends \FreeSSO\Model\StorageModel\Broker
{
    
    protected $brk_id = 0;
    protected $dom_id = null;
    protected $brk_key = null;
    protected $brk_name = null;
    protected $brk_certificate = null;
    protected $brk_active = null;
    protected $brk_ts = null;
    protected $brk_api_scope = null;
    protected $brk_users_scope = null;
    protected $brk_ips = null;
    protected $brk_config = null;
}
