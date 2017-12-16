<?php

use yii\db\Migration;

/**
 * Class m171216_023223_create_table_doc_oficiliales
 */
class m171216_023223_create_table_doc_oficiliales extends Migration
{
    /**
     * @inheritdoc
     */
    public function safeUp()
    {
        $this->createTable('CAT_DOCUMENTOS_OFICIALES', [
            'CVE_DOCUMENTO' => $this->primaryKey(),
            "NOMB_DOCUMENTO" => $this->string(50)->defaultValue(''),
            "DESC_DOCUMENTO" => $this->string(50)->defaultValue(''),
            "STATUS_1" => $this->string(1)->defaultValue('A'),
        ]);
    }

    /**
     * @inheritdoc
     */
    public function safeDown()
    {
        echo "m171216_023223_create_table_doc_oficiliales cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m171216_023223_create_table_doc_oficiliales cannot be reverted.\n";

        return false;
    }
    */
}
