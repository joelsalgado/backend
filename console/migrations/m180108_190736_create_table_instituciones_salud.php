<?php

use yii\db\Migration;

/**
 * Class m180108_190736_create_table_instituciones_salud
 */
class m180108_190736_create_table_instituciones_salud extends Migration
{
    /**
     * @inheritdoc
     */
    public function safeUp()
    {
        $this->createTable('CAT_INST_SALUD', [
            'CVE_INST_SALUD' => $this->primaryKey(),
            "DESC_INST_SALUD" => $this->string(30)->defaultValue(''),
            "STATUS_1" => $this->string(1)->defaultValue('A'),
            "SEPUBLICA" => $this->string(1)->defaultValue('S'),
        ]);
    }

    /**
     * @inheritdoc
     */
    public function safeDown()
    {
        echo "m180108_190736_create_table_instituciones_salud cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m180108_190736_create_table_instituciones_salud cannot be reverted.\n";

        return false;
    }
    */
}
