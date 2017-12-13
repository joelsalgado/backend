<?php

use yii\db\Migration;

/**
 * Class m171213_003005_create_table_ageb
 */
class m171213_003005_create_table_ageb extends Migration
{
    /**
     * @inheritdoc
     */
    public function safeUp()
    {
        $this->createTable('CAT_AGEBS', [
            'ID' => $this->primaryKey(),
            "ENTIDAD_ID" => $this->integer(2)->defaultValue(0),
            "MUNICIPIO_ID" => $this->integer(3)->defaultValue(0),
            "LOC_ID" => $this->integer(7)->defaultValue(0),
            "AGEB_ID" => $this->string(4)->defaultValue(''),
            "CVE_LOC_INEGI" => $this->integer(4)->defaultValue(0),
            "CVE_AGEB_INEGI" => $this->string(5)->defaultValue(''),
            "LOC_DESC" => $this->string(200)->defaultValue(''),
            "DESCRI" => $this->string(200)->defaultValue(''),
        ]);

        $this->addForeignKey(
            'FK-AGEG-LOC',
            'CAT_AGEBS',
            'ENTIDAD_ID',
            'CAT_ENTIDAD_FEDERATIVA',
            'CVE_ENTIDAD_FEDERATIVA',
            'CASCADE'
        );
    }

    /**
     * @inheritdoc
     */
    public function safeDown()
    {
        echo "m171213_003005_create_table_ageb cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m171213_003005_create_table_ageb cannot be reverted.\n";

        return false;
    }
    */
}
