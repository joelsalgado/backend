<?php

use yii\db\Migration;

/**
 * Class m171213_170214_create_table_grado_estudios
 */
class m171213_170214_create_table_grado_estudios extends Migration
{
    /**
     * @inheritdoc
     */
    public function safeUp()
    {
        $this->createTable('CAT_GRADO_ESTUDIO', [
            'CVE_GRADO_ESTUDIOS' => $this->primaryKey(),
            "GRADO_ESTUDIOS" => $this->string(50)->defaultValue(''),
        ]);
    }

    /**
     * @inheritdoc
     */
    public function safeDown()
    {
        echo "m171213_170214_create_table_grado_estudios cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m171213_170214_create_table_grado_estudios cannot be reverted.\n";

        return false;
    }
    */
}
