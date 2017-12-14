<?php

use yii\db\Migration;

/**
 * Class m171213_230617_create_table_programas
 */
class m171213_230617_create_table_programas extends Migration
{
    /**
     * @inheritdoc
     */
    public function safeUp()
    {
        $this->createTable('CAT_PROGRAMAS', [
            'CVE_PROGRAMA' => $this->primaryKey(),
            "CVE_DEPENDENCIA" => $this->string(10)->defaultValue(''),
            "PROGRAMA" => $this->string(150)->defaultValue(''),
            "FECHA_INICIO" => $this->date(),
            "FECHA_FIN" => $this->date(),
            "VIGENTE" => $this->string(1)->defaultValue('S'),
            "ORDEN" => $this->integer(5)->defaultValue(0),
            "TIPO" => $this->string(1)->defaultValue('P'),
            "SEPUBLICA" => $this->string(1)->defaultValue('S'),
            "OBERVACIONES" => $this->string(100)->defaultValue(''),
            "STATUS_1" => $this->string(1)->defaultValue('B'),
            "PROGRAMA2" => $this->string(150)->defaultValue(''),
            "DESC_ABREVIADA" => $this->string(150)->defaultValue(''),
        ]);

        $this->addForeignKey(
            'FK-DEP-PROG',
            'CAT_PROGRAMAS',
            'CVE_DEPENDENCIA',
            'LU_DEPENDENCIAS',
            'DEPEN_ID',
            'CASCADE'
        );
    }

    /**
     * @inheritdoc
     */
    public function safeDown()
    {
        echo "m171213_230617_create_table_programas cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m171213_230617_create_table_programas cannot be reverted.\n";

        return false;
    }
    */
}
