<?php

use yii\db\Migration;

/**
 * Class m180109_192040_create_table_sandren
 */
class m180109_192040_create_table_sandren extends Migration
{
    /**
     * @inheritdoc
     */
    public function safeUp()
    {
        $this->createTable('CAT_SERVICIO_SANDREN', [
            'CVE_SERVICIO_SANDREN' => $this->primaryKey(),
            "DESC_SERVICIO_SANDREN" => $this->string(50)->defaultValue(''),
            "STATUS_1" => $this->string(1)->defaultValue('A'),
            "SEPUBLICA" => $this->string(1)->defaultValue('S'),
        ]);
    }

    /**
     * @inheritdoc
     */
    public function safeDown()
    {
        echo "m180109_192040_create_table_sandren cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m180109_192040_create_table_sandren cannot be reverted.\n";

        return false;
    }
    */
}
