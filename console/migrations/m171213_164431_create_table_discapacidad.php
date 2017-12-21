<?php

use yii\db\Migration;

/**
 * Class m171213_164431_create_table_discapacidad
 */
class m171213_164431_create_table_discapacidad extends Migration
{
    /**
     * @inheritdoc
     */
    public function safeUp()
    {
        $this->createTable('CAT_DISCAPACIDAD', [
            'CVE_DISCAPACIDAD' => $this->primaryKey(),
            "DESC_DISCAPACIDAD" => $this->string(30)->defaultValue(''),
            "STATUS_1" => $this->string(1)->defaultValue('A'),
        ]);
    }

    /**
     * @inheritdoc
     */
    public function safeDown()
    {
        echo "m171213_164431_create_table_discapacidad cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m171213_164431_create_table_discapacidad cannot be reverted.\n";

        return false;
    }
    */
}
