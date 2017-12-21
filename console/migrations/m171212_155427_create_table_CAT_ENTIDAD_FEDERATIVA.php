<?php

use yii\db\Migration;

/**
 * Class m171212_155427_create_table_CAT_ENTIDAD_FEDERATIVA
 */
class m171212_155427_create_table_CAT_ENTIDAD_FEDERATIVA extends Migration
{
    /**
     * @inheritdoc
     */
    public function safeUp()
    {
        $this->createTable('CAT_ENTIDAD_FEDERATIVA', [
            'CVE_ENTIDAD_FEDERATIVA' => $this->primaryKey(),
            "ENTIDAD_FEDERATIVA" => $this->string(150),
            "ABREVIACION_ENTIDAD" => $this->string(2)
        ]);
    }

    /**
     * @inheritdoc
     */
    public function safeDown()
    {
        echo "m171212_155427_create_table_CAT_ENTIDAD_FEDERATIVA cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m171212_155427_create_table_CAT_ENTIDAD_FEDERATIVA cannot be reverted.\n";

        return false;
    }
    */
}
