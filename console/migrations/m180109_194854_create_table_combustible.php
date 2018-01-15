<?php

use yii\db\Migration;

/**
 * Class m180109_194854_create_table_combustible
 */
class m180109_194854_create_table_combustible extends Migration
{
    /**
     * @inheritdoc
     */
    public function safeUp()
    {
        $this->createTable('CAT_COMBUSTIBLES', [
            'CVE_COMBUSTIBLE' => $this->primaryKey(),
            "DESC_COMBUSTIBLE" => $this->string(30)->defaultValue(''),
            "STATUS_1" => $this->string(1)->defaultValue('A'),
            "SEPUBLICA" => $this->string(1)->defaultValue('S'),
        ]);
    }

    /**
     * @inheritdoc
     */
    public function safeDown()
    {
        echo "m180109_194854_create_table_combustible cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m180109_194854_create_table_combustible cannot be reverted.\n";

        return false;
    }
    */
}
