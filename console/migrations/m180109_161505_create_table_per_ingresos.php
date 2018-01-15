<?php

use yii\db\Migration;

/**
 * Class m180109_161505_create_table_per_ingresos
 */
class m180109_161505_create_table_per_ingresos extends Migration
{
    /**
     * @inheritdoc
     */
    public function safeUp()
    {
        $this->createTable('CAT_PER_INGRESOS', [
            'CVE_PER_INGRESO' => $this->primaryKey(),
            "DESC_PER_INGRESO" => $this->string(20)->defaultValue(''),
            "STATUS_1" => $this->string(1)->defaultValue('A'),
            "SEPUBLICA" => $this->string(1)->defaultValue('S'),
        ]);
    }

    /**
     * @inheritdoc
     */
    public function safeDown()
    {
        echo "m180109_161505_create_table_per_ingresos cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m180109_161505_create_table_per_ingresos cannot be reverted.\n";

        return false;
    }
    */
}
