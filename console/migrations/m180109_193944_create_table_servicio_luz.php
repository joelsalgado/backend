<?php

use yii\db\Migration;

/**
 * Class m180109_193944_create_table_servicio_luz
 */
class m180109_193944_create_table_servicio_luz extends Migration
{
    /**
     * @inheritdoc
     */
    public function safeUp()
    {
        $this->createTable('CAT_SERVICIO_LUZ', [
            'CVE_SERVICIO_LUZ' => $this->primaryKey(),
            "DESC_SERVICIO_LUZ" => $this->string(30)->defaultValue(''),
            "STATUS_1" => $this->string(1)->defaultValue('A'),
            "SEPUBLICA" => $this->string(1)->defaultValue('S'),
        ]);
    }

    /**
     * @inheritdoc
     */
    public function safeDown()
    {
        echo "m180109_193944_create_table_servicio_luz cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m180109_193944_create_table_servicio_luz cannot be reverted.\n";

        return false;
    }
    */
}
