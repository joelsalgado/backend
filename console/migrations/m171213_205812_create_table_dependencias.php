<?php

use yii\db\Migration;

/**
 * Class m171213_205812_create_table_dependencias
 */
class m171213_205812_create_table_dependencias extends Migration
{
    /**
     * @inheritdoc
     */
    public function safeUp()
    {
        $this->createTable('LU_DEPENDENCIAS', [
            "DEPEN_ID" => $this->string(11)->defaultValue(''),
            "DEPEN_DESC" => $this->string(200)->defaultValue(''),
            "DEPEN_PADRE" => $this->string(10)->defaultValue(''),
            "DEPEN_HIJO" => $this->string(10)->defaultValue(''),
            "DEPEN_STATUS" => $this->string(1)->defaultValue(''),
            "ESTRUCGOB_ID" => $this->string(10)->defaultValue(''),
            "CLASIFICGOB_ID" => $this->integer(4),
            "DEPEN_FECREG" => $this->date(),
            "DEPEN_FECACT" => $this->date(),
            'PRIMARY KEY ([[DEPEN_ID]])',
        ]);
    }

    /**
     * @inheritdoc
     */
    public function safeDown()
    {
        echo "m171213_205812_create_table_dependencias cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m171213_205812_create_table_dependencias cannot be reverted.\n";

        return false;
    }
    */
}
