<?php
namespace FreeSSO\Storage\Migrations\V20240127155400;

/**
 *
 * @author jeromeklam
 *
 */
class Database extends \FreeFW\Storage\Migrations\AbstractMigration
{

    /**
     *
     * @return bool
     */
    public function up() : bool
    {
        $this->sqlUp();
        return true;
    }

    /**
     *
     * @return bool
     */
    public function down() : bool
    {
        return true;
    }
}
