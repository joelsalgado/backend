<?php

use yii\db\Migration;

/**
 * Class m180108_200418_create_table_tipo_empleo
 */
class m180108_200418_create_table_tipo_empleo extends Migration
{
    /**
     * @inheritdoc
     */
    public function safeUp()
    {
        $this->createTable('CAT_TIPO_EMPLEO', [
            'CVE_TIPO_EMPLEO' => $this->primaryKey(),
            "DESC_TIPO_EMPLEO" => $this->string(30)->defaultValue(''),
            "STATUS_1" => $this->string(1)->defaultValue('A'),
            "SEPUBLICA" => $this->string(1)->defaultValue('S'),
        ]);
    }

    /**
     * @inheritdoc
     */
    public function safeDown()
    {
        echo "m180108_200418_create_table_tipo_empleo cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m180108_200418_create_table_tipo_empleo cannot be reverted.\n";

        return false;
    }
    */
}
