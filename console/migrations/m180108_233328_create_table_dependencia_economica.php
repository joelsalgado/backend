<?php

use yii\db\Migration;

/**
 * Class m180108_233328_create_table_dependencia_economica
 */
class m180108_233328_create_table_dependencia_economica extends Migration
{
    /**
     * @inheritdoc
     */
    public function safeUp()
    {
        $this->createTable('CAT_DEPENDIENTES_ECONOM', [
            'CVE_DEPEN_ECONOM' => $this->primaryKey(),
            "DESC_DEPEN_ECONOM" => $this->string(30)->defaultValue(''),
            "STATUS_1" => $this->string(1)->defaultValue('A'),
            "SEPUBLICA" => $this->string(1)->defaultValue('S'),
        ]);
    }

    /**
     * @inheritdoc
     */
    public function safeDown()
    {
        echo "m180108_233328_create_table_dependencia_economica cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m180108_233328_create_table_dependencia_economica cannot be reverted.\n";

        return false;
    }
    */
}
