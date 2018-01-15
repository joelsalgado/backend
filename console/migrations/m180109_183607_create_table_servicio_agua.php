<?php

use yii\db\Migration;

/**
 * Class m180109_183607_create_table_servicio_agua
 */
class m180109_183607_create_table_servicio_agua extends Migration
{
    /**
     * @inheritdoc
     */
    public function safeUp()
    {
        $this->createTable('CAT_SERVICIO_AGUA', [
            'CVE_SERVICIO' => $this->primaryKey(),
            "DESC_SERVICIO" => $this->string(60)->defaultValue(''),
            "STATUS_1" => $this->string(1)->defaultValue('A'),
            "SEPUBLICA" => $this->string(1)->defaultValue('S'),
        ]);
    }

    /**
     * @inheritdoc
     */
    public function safeDown()
    {
        echo "m180109_183607_create_table_servicio_agua cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m180109_183607_create_table_servicio_agua cannot be reverted.\n";

        return false;
    }
    */
}
