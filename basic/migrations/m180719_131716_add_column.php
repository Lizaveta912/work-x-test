<?php

use yii\db\Migration;

/**
 * Class m180719_131716_add_column
 */
class m180719_131716_add_column extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addColumn('article', 'tag_id', $this->integer());
        $this->alterColumn('article', 'description', $this->string(255));
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropColumn('article', 'tag_id');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m180719_131716_add_column cannot be reverted.\n";

        return false;
    }
    */
}
