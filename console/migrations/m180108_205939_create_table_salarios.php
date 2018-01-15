<?php

use yii\db\Migration;

/**
 * Class m180108_205939_create_table_salarios
 */
class m180108_205939_create_table_salarios extends Migration
{
    /**
     * @inheritdoc
     */
    public function safeUp()
    {
        $this->createTable('CAT_SALARIOS', [
            'CVE_SALARIO' => $this->primaryKey(),
            "AREA_GEOGRAFICA" => $this->string(1)->defaultValue(''),
            "DESC_SALARIO" => $this->string(80)->defaultValue(''),
            "ZONA" => $this->string(150)->defaultValue(''),
            "CVE_PROGRAMA" => $this->integer(10)->defaultValue(0),
            "SALARIO_INICIAL" => $this->integer(12)->defaultValue(0),
            "SALARIO_FINAL" => $this->integer(12)->defaultValue(0),
            "SALARIO_MINIMO" => $this->integer(12)->defaultValue(0),
            "FECHA_REG" => $this->date()
        ]);
    }

    /**
     * @inheritdoc
     */
    public function safeDown()
    {
        echo "m180108_205939_create_table_salarios cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m180108_205939_create_table_salarios cannot be reverted.\n";

        return false;
    }
    */
}
