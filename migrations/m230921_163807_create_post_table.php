<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%post}}`.
 */
class m230921_163807_create_post_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%post}}', [
            'id' => $this->primaryKey(),
            'title' => $this->string(30),
            'description' => $this->text(),
            'date' => $this->date(),
            'image' => $this->string(),
            'category_id' => $this->integer()->defaultValue(1)
        ]);

        $this->createIndex(
            'idx1',
            'post',
            'category_id'
        );

        $this->addForeignKey(
            'fk1',
            'post',
            'category_id',
            'category',
            'id',
            'CASCADE'
        );
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropForeignKey(
            'fk1',
            'post'
        );
        $this->dropIndex(
            'idx1',
            'post'
        );
        $this->dropTable('{{%post}}');
    }
}
