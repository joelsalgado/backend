<?php

use yii\db\Migration;

/**
 * Class m171213_163804_create_table_situcion_laboral
 */
class m171213_163804_create_table_situcion_laboral extends Migration
{
    /**
     * @inheritdoc
     */
    public function safeUp()
    {
        $this->createTable('CAT_SITUACION_LABORAL', [
            'CVE_SITUACION_LABORAL' => $this->primaryKey(),
            "SITUACION_LABORAL" => $this->string(30)->defaultValue(''),
            "SEPUBLICA" => $this->string(1)->defaultValue(''),
        ]);
    }

    /**
     * @inheritdoc
     */
    public function safeDown()
    {
        echo "m171213_163804_create_table_situcion_laboral cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m171213_163804_create_table_situcion_laboral cannot be reverted.\n";

        return false;
    }
    */
}
