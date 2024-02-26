<?php

declare(strict_types=1);

use Migrations\AbstractMigration;

class CreateUsersTable extends AbstractMigration
{
    /**
     * Change Method.
     *
     * More information on this method is available here:
     * https://book.cakephp.org/phinx/0/en/migrations.html#the-change-method
     * @return void
     */
    public function change(): void
    {
        $table = $this->table('users');
        $table
            ->addColumn('first_name', 'string', ['limit' => 255, 'null' => false])
            ->addColumn('last_name', 'string', ['limit' => 255, 'null' => false])
            ->addColumn('email', 'string', ['limit' => 255, 'null' => false])
            ->addColumn('password', 'string', ['limit' => 255, 'null' => false])
            ->addColumn('role', 'string', ['limit' => 50, 'null' => false])
            ->addColumn('date_of_birth', 'date', ['null' => true])
            ->addColumn('gender', 'string', ['limit' => 10, 'null' => true])
            ->addColumn('username', 'string', ['limit' => 100, 'null' => false])
            ->addColumn('address', 'text', ['null' => true])
            ->addColumn('mobile_no', 'string', ['limit' => 20, 'null' => true])
            ->addColumn('since', 'datetime', ['null' => false, 'default' => date('Y-m-d H:i:s')])
            ->addColumn('status', 'boolean', ['default' => true])
            ->addColumn('created', 'datetime', ['null' => false])
            ->addColumn('modified', 'datetime', ['null' => true])
            ->create();
    }
}
