<?php
use Migrations\AbstractMigration;

class AddCreatedAndModifiedToProbeLogs extends AbstractMigration
{
    /**
     * Change Method.
     *
     * More information on this method is available here:
     * http://docs.phinx.org/en/latest/migrations.html#the-change-method
     * @return void
     */
    public function change()
    {
        $table = $this->table('probe_logs');
        $table->addColumn('Created', 'datetime', [
            'default' => null,
            'null' => false,
        ]);
        $table->addColumn('Modified', 'datetime', [
            'default' => null,
            'null' => false,
        ]);
        $table->update();
    }
}
