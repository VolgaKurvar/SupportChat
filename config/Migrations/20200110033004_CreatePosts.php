<?php
use Migrations\AbstractMigration;

class CreatePosts extends AbstractMigration
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
        $table = $this->table('posts');
        $table->addColumn('thread_id', 'integer', [
            'default' => null,
            'limit' => 11,
            'null' => false,
        ]);
        $table->addColumn('writer', 'string', [
            'default' => null,
            'limit' => 255,
            'null' => false,
        ]);
        $table->addColumn('content', 'string', [
            'default' => null,
            'limit' => 255,
            'null' => false,
        ]);
        $table->create();
    }
}
