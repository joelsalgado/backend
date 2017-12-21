<?php

use yii\db\Migration;

class m171212_161757_create_table_CAT_ESTADO_CIVIL extends Migration
{
    public function safeUp()
    {
        $this->createTable('CAT_ESTADO_CIVIL', [
            'CVE_ESTADO_CIVIL' => $this->primaryKey(),
            "ESTADO_CIVIL" => $this->string(40),
        ]);
    }

    public function safeDown()
    {
        echo "m171212_161757_create_table_CAT_ESTADO_CIVIL cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m171212_161757_create_table_CAT_ESTADO_CIVIL cannot be reverted.\n";

        return false;
    }
    */
}
