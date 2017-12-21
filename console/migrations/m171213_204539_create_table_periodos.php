<?php

use yii\db\Migration;

/**
 * Class m171213_204539_create_table_periodos
 */
class m171213_204539_create_table_periodos extends Migration
{

    public function safeUp()
    {
        $this->createTable('CAT_PERIODOS', [
            'N_PERIODO' => $this->primaryKey(),
            "DESC_PERIODO" => $this->string(30)->defaultValue(''),
        ]);
    }

    /**
     * @inheritdoc
     */
    public function safeDown()
    {
        echo "m171213_204539_create_table_periodos cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m171213_204539_create_table_periodos cannot be reverted.\n";

        return false;
    }
    */
}
