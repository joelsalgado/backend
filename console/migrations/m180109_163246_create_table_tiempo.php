<?php

use yii\db\Migration;

/**
 * Class m180109_163246_create_table_tiempo
 */
class m180109_163246_create_table_tiempo extends Migration
{
    /**
     * @inheritdoc
     */
    public function safeUp()
    {
        $this->createTable('CAT_TIEMPO', [
            'CVE_TIEMPO' => $this->primaryKey(),
            "DESC_TIEMPO" => $this->string(30)->defaultValue(''),
            "STATUS_1" => $this->string(1)->defaultValue('A'),
            "SEPUBLICA" => $this->string(1)->defaultValue('S'),
        ]);
    }

    /**
     * @inheritdoc
     */
    public function safeDown()
    {
        echo "m180109_163246_create_table_tiempo cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m180109_163246_create_table_tiempo cannot be reverted.\n";

        return false;
    }
    */
}
