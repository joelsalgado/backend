<?php

use yii\db\Migration;

class m171212_162449_create_table_CAT_NACIONALIDADES extends Migration
{
    public function safeUp()
    {
        $this->createTable('CAT_NACIONALIDADES', [
            'CVE_NACIONALIDAD' => $this->primaryKey(),
            "DESC_NACIONALIDAD" => $this->string(50),
            "NOMBRE_COMUN" => $this->string(60),
            "NOMBRE_OFICIAL" => $this->string(60)
        ]);
    }

    public function safeDown()
    {
        echo "m171212_162449_create_table_CAT_NACIONALIDADES cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m171212_162449_create_table_CAT_NACIONALIDADES cannot be reverted.\n";

        return false;
    }
    */
}
