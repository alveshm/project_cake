<?php
use Migrations\AbstractMigration;

class CreateProducts extends AbstractMigration
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
        $table = $this->table('products');
        $table->addColumn('name', 'string', [
            'default' => null,
            'limit' => 255,
            'null' => false,
        ]);
        $table->addColumn('price', 'float', [
            'default' => null,
            'null' => false,
        ]);
        $table->addColumn('dt_valid', 'datetime', [
            'default' => null,
            'null' => false,
        ]);
        $table->addColumn('dt_frab', 'datetime', [
            'default' => null,
            'null' => false,
        ]);
        $table->create();
    }
}
