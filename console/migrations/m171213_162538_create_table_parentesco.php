<?php

use yii\db\Migration;

/**
 * Class m171213_162538_create_table_parentesco
 */
class m171213_162538_create_table_parentesco extends Migration
{
    /**
     * @inheritdoc
     */
    public function safeUp()
    {
        $this->createTable('CAT_PARENTESCO', [
            'CVE_PARENTESCO' => $this->primaryKey(),
            "DESC_PARENTESCO" => $this->string(20)->defaultValue(''),
            "STATUS_1" => $this->string(1)->defaultValue('A'),
            "SEPUBLICA" => $this->string(1)->defaultValue('S'),
        ]);
    }

    /**
     * @inheritdoc
     */
    public function safeDown()
    {
        echo "m171213_162538_create_table_parentesco cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m171213_162538_create_table_parentesco cannot be reverted.\n";

        return false;
    }
    */
}
