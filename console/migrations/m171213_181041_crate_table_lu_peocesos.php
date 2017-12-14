<?php

use yii\db\Migration;

/**
 * Class m171213_181041_crate_table_lu_peocesos
 */
class m171213_181041_crate_table_lu_peocesos extends Migration
{
    /**
     * @inheritdoc
     */
    public function safeUp()
    {
        $this->createTable('LU_PROCESO', [
            'PROCESO_ID' => $this->primaryKey(),
            "PROCESO_DESC" => $this->string(100)->defaultValue(''),
            "PROCESO_STATUS" => $this->string(1)->defaultValue('S'),
            "PROCESO_FECREG" => $this->date()
        ]);
    }

    /**
     * @inheritdoc
     */
    public function safeDown()
    {
        echo "m171213_181041_crate_table_lu_peocesos cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m171213_181041_crate_table_lu_peocesos cannot be reverted.\n";

        return false;
    }
    */
}
