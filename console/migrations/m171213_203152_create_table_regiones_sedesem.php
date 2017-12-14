<?php

use yii\db\Migration;

/**
 * Class m171213_203152_create_table_regiones_sedesem
 */
class m171213_203152_create_table_regiones_sedesem extends Migration
{
    /**
     * @inheritdoc
     */
    public function safeUp()
    {
        $this->createTable('CAT_REGIONES_SEDESEM', [
            'REGIONID' => $this->primaryKey(),
            "REGIONNOMBRE" => $this->string(15)->defaultValue(''),
            "REGIONDESCRIPCION" => $this->string(20)->defaultValue(''),
        ]);
    }

    /**
     * @inheritdoc
     */
    public function safeDown()
    {
        echo "m171213_203152_create_table_regiones_sedesem cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m171213_203152_create_table_regiones_sedesem cannot be reverted.\n";

        return false;
    }
    */
}
