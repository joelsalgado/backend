<?php

use yii\db\Migration;

/**
 * Class m180109_175529_create_table_material_vivienda
 */
class m180109_175529_create_table_material_vivienda extends Migration
{
    /**
     * @inheritdoc
     */
    public function safeUp()
    {
        $this->createTable('CAT_MATERIAL_VIVIENDA', [
            'CVE_MATERIAL' => $this->primaryKey(),
            "DESC_MATERIAL" => $this->string(80)->defaultValue(''),
        ]);
    }

    /**
     * @inheritdoc
     */
    public function safeDown()
    {
        echo "m180109_175529_create_table_material_vivienda cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m180109_175529_create_table_material_vivienda cannot be reverted.\n";

        return false;
    }
    */
}
