<?php

use Phinx\Migration\AbstractMigration;

class ClientConfigs extends AbstractMigration
{
    /**
     * Migrate Up.
     */
    public function up()
    {
        $table = $this->table('client_configs');
        $table->addColumn('client_id', 'string', array('limit' => 100))
              ->addColumn('client_name', 'string', array('limit' => 100))
              ->addColumn('client_location', 'string', array('limit' => 100))
              ->addColumn('values', 'string');
        $table->save();
    }

    /**
     * Migrate Down.
     */
    public function down()
    {

    }
}