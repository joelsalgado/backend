<?php

use yii\db\Migration;

/**
 * Class m180108_174221_create_table_cantidades
 */
class m180108_174221_create_table_cantidades extends Migration
{
    /**
     * @inheritdoc
     */
    public function safeUp()
    {
        $this->createTable('CAT_CANTIDADES', [
            'CVE_CANT' => $this->primaryKey(),
            "DESC_CANT" => $this->string(20)->defaultValue(''),
        ]);
    }

    /**
     * @inheritdoc
     */
    public function safeDown()
    {
        echo "m180108_174221_create_table_cantidades cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m180108_174221_create_table_cantidades cannot be reverted.\n";

        return false;
    }
    */
}
