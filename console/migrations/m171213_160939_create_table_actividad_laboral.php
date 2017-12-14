<?php

use yii\db\Migration;

/**
 * Class m171213_160939_create_table_actividad_laboral
 */
class m171213_160939_create_table_actividad_laboral extends Migration
{
    /**
     * @inheritdoc
     */
    public function safeUp()
    {
        $this->createTable('CAT_LABORAL', [
            'CVE_ACTIVIDAD_LABORAL' => $this->primaryKey(),
            "ACTIVIDAD_LABORAL" => $this->string(20)->defaultValue(''),
            "SEPUBLICA" => $this->string(1)->defaultValue(''),
        ]);
    }

    /**
     * @inheritdoc
     */
    public function safeDown()
    {
        echo "m171213_160939_create_table_actividad_laboral cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m171213_160939_create_table_actividad_laboral cannot be reverted.\n";

        return false;
    }
    */
}
