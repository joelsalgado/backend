<?php

use yii\db\Migration;

/**
 * Class m171213_181902_crate_table_lu_actividades
 */
class m171213_181902_crate_table_lu_actividades extends Migration
{
    /**
     * @inheritdoc
     */
    public function safeUp()
    {
        $this->createTable('LU_ACTIVIDADES', [
            'ACTIVIDAD_ID' => $this->primaryKey(),
            "ACTIVIDAD_DESC" => $this->string(100)->defaultValue(''),
            "ACTIVIDAD_STATUS" => $this->string(1)->defaultValue('S'),
            "PROCESO_ID" => $this->integer(2),
            "ACTIVIDAD_FECREG" => $this->date()
        ]);
        $this->addForeignKey(
            'FK-ACT-PROC',
            'LU_ACTIVIDADES',
            'PROCESO_ID',
            'LU_PROCESO',
            'PROCESO_ID',
            'CASCADE'
        );
    }

    /**
     * @inheritdoc
     */
    public function safeDown()
    {
        echo "m171213_181902_crate_table_lu_actividades cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m171213_181902_crate_table_lu_actividades cannot be reverted.\n";

        return false;
    }
    */
}
