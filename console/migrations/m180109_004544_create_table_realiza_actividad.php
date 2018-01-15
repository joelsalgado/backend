<?php

use yii\db\Migration;

/**
 * Class m180109_004544_create_table_realiza_actividad
 */
class m180109_004544_create_table_realiza_actividad extends Migration
{
    /**
     * @inheritdoc
     */
    public function safeUp()
    {
        $this->createTable('CAT_REALIZA_ACTIVIDAD', [
            'CVE_REALIZA_ACTIVIDAD' => $this->primaryKey(),
            "DESC_REALIZA_ACTIVIDAD" => $this->string(30)->defaultValue(''),
            "STATUS_1" => $this->string(1)->defaultValue('A'),
            "SEPUBLICA" => $this->string(1)->defaultValue('S'),
        ]);
    }

    /**
     * @inheritdoc
     */
    public function safeDown()
    {
        echo "m180109_004544_create_table_realiza_actividad cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m180109_004544_create_table_realiza_actividad cannot be reverted.\n";

        return false;
    }
    */
}
