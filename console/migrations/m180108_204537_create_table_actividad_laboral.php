<?php

use yii\db\Migration;

/**
 * Class m180108_204537_create_table_actividad_laboral
 */
class m180108_204537_create_table_actividad_laboral extends Migration
{
    /**
     * @inheritdoc
     */
    public function safeUp()
    {
        $this->createTable('CAT_ACTIVIDAD_LABORAL', [
            'CVE_ACTIVIDAD_LABORAL' => $this->primaryKey(),
            "ACTIVIDAD_LABORAL" => $this->string(40)->defaultValue(''),
            "SEPUBLICA" => $this->string(1)->defaultValue('S'),
        ]);
    }

    /**
     * @inheritdoc
     */
    public function safeDown()
    {
        echo "m180108_204537_create_table_actividad_laboral cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m180108_204537_create_table_actividad_laboral cannot be reverted.\n";

        return false;
    }
    */
}
