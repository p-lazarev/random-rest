<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%random_number}}`.
 */
class m200623_151825_create_random_number_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%random_number}}', [
            'id' => $this->primaryKey(),
            'number' => $this->integer()->notNull(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%random_number}}');
    }
}
