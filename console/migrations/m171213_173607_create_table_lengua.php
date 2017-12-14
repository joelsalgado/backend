<?php

use yii\db\Migration;

class m171213_173607_create_table_lengua extends Migration
{

    public function safeUp()
    {
        $this->createTable('CAT_LENGUAS', [
            'CVE_LENGUA' => $this->primaryKey(),
            "DESC_LENGUA" => $this->string(30)->defaultValue(''),
            "STATUS_1" => $this->string(1)->defaultValue('A'),
            "SEPUBLICA" => $this->string(30)->defaultValue('S'),
        ]);
    }

    public function safeDown()
    {
        echo "m171213_173607_create_table_lengua cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m171213_173607_create_table_lengua cannot be reverted.\n";

        return false;
    }
    */
}
