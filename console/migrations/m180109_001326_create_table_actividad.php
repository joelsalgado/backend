<?php

use yii\db\Migration;

/**
 * Class m180109_001326_create_table_actividad
 */
class m180109_001326_create_table_actividad extends Migration
{
    /**
     * @inheritdoc
     */
    public function safeUp()
    {
        $this->createTable('CAT_ACTIVIDAD', [
            'CVE_ACTIVIDAD' => $this->primaryKey(),
            "DESC_ACTIVIDAD" => $this->string(100)->defaultValue(''),
            "STATUS_1" => $this->string(1)->defaultValue('A'),
            "SEPUBLICA" => $this->string(1)->defaultValue('S'),
        ]);
    }

    /**
     * @inheritdoc
     */
    public function safeDown()
    {
        echo "m180109_001326_create_table_actividad cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m180109_001326_create_table_actividad cannot be reverted.\n";

        return false;
    }
    */
}
