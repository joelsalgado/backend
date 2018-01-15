<?php

use yii\db\Migration;

/**
 * Class m180108_181719_create_table_tiempo_radicar
 */
class m180108_181719_create_table_tiempo_radicar extends Migration
{
    /**
     * @inheritdoc
     */
    public function safeUp()
    {
        $this->createTable('CAT_TIEMPO_RADICAR', [
            'CVE_TIEMPO_RADICAR' => $this->primaryKey(),
            "DESC_TIEMPO_RADICAR" => $this->string(50)->defaultValue(''),
            "STATUS_1" => $this->string(1)->defaultValue('A'),
            "SEPUBLICA" => $this->string(1)->defaultValue('S'),
        ]);
    }

    /**
     * @inheritdoc
     */
    public function safeDown()
    {
        echo "m180108_181719_create_table_tiempo_radicar cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m180108_181719_create_table_tiempo_radicar cannot be reverted.\n";

        return false;
    }
    */
}
