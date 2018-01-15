<?php

use yii\db\Migration;

/**
 * Class m180109_172229_create_table_casa_donde_vive_es
 */
class m180109_172229_create_table_casa_donde_vive_es extends Migration
{
    /**
     * @inheritdoc
     */
    public function safeUp()
    {
        $this->createTable('CAT_CASADONDEVIVE_ES', [
            'CVE_CASADONDEVIVE_ES' => $this->primaryKey(),
            "DESC_CASADONDEVIVE_ES" => $this->string(30)->defaultValue(''),
            "STATUS_1" => $this->string(1)->defaultValue('A'),
            "SEPUBLICA" => $this->string(1)->defaultValue('S'),
        ]);
    }

    /**
     * @inheritdoc
     */
    public function safeDown()
    {
        echo "m180109_172229_create_table_casa_donde_vive_es cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m180109_172229_create_table_casa_donde_vive_es cannot be reverted.\n";

        return false;
    }
    */
}
