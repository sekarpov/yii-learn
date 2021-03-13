<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%tag}}`.
 */
class m210313_133222_create_tag_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }

        $this->createTable('{{%tag}}', [
            'id' => $this->primaryKey(),
            'slug' => $this->string(256)->notNull()->unique(),
            'title' => $this->string(256)->notNull(),
        ], $tableOptions);

        $this->createTable('{{%tag_to_news}}', [
            'tag_id' => $this->integer(),
            'news_id' => $this->integer(),
        ], $tableOptions);

        $this->addPrimaryKey('pk_tog_to_news', '{{%tag_to_news}}', ['tag_id', 'news_id']);

        $this->addForeignKey('fk_tag_to_news_tag', '{{%tag_to_news}}', 'tag_id', '{{%tag}}', 'id', 'CASCADE');
        $this->addForeignKey('fk_tag_to_news_news', '{{%tag_to_news}}', 'news_id', '{{%news}}', 'id', 'CASCADE');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropForeignKey('fk_tag_to_news_news', 'tag_to_news');
        $this->dropForeignKey('fk_tag_to_news_tag', 'tag_to_news');

        $this->dropTable('{{%tag}}');
        $this->dropTable('{{%tag_to_news}}');
    }
}
