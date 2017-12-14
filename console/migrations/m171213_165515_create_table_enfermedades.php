<?php

use yii\db\Migration;

/**
 * Class m171213_165515_create_table_enfermedades
 */
class m171213_165515_create_table_enfermedades extends Migration
{
    /**
     * @inheritdoc
     */
    public function safeUp()
    {
        $this->createTable('CAT_ENFERMEDADES', [
            'CVE_ENFERMEDAD' => $this->primaryKey(),
            "DESC_ENFERMEDAD" => $this->string(30)->defaultValue(''),
            "STATUS_1" => $this->string(1)->defaultValue('A'),
        ]);
    }

    /**
     * @inheritdoc
     */
    public function safeDown()
    {
        echo "m171213_165515_create_table_enfermedades cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m171213_165515_create_table_enfermedades cannot be reverted.\n";

        return false;
    }
    */
}
