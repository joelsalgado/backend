<?php

use yii\db\Migration;

/**
 * Class m180108_192253_create_table_orfandad
 */
class m180108_192253_create_table_orfandad extends Migration
{
    /**
     * @inheritdoc
     */
    public function safeUp()
    {
        $this->createTable('CAT_ORFANDAD', [
            'CVE_ORFANDAD' => $this->primaryKey(),
            "DESC_ORFANDAD" => $this->string(50)->defaultValue(''),
            "STATUS_1" => $this->string(1)->defaultValue('A'),
        ]);
    }

    /**
     * @inheritdoc
     */
    public function safeDown()
    {
        echo "m180108_192253_create_table_orfandad cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m180108_192253_create_table_orfandad cannot be reverted.\n";

        return false;
    }
    */
}
