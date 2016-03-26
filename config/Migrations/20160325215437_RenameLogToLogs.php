<?php
use Migrations\AbstractMigration;

class RenameLogToLogs extends AbstractMigration
{
    /**
     * Migrate Up.
     */
    public function up()
    {
        $table = $this->table('log');
        $table->rename('logs');
    }

    /**
     * Migrate Down.
     */
    public function down()
    {
        $table = $this->table('logs');
        $table->rename('log');
    }
}
