<?php

use yii\db\Migration;

/**
 * Class m180102_164525_index_metadato
 */
class m180102_164525_index_metadato extends Migration
{
    /**
     * @inheritdoc
     */
    public function safeUp()
    {


        $this->createIndex(
            'idx-metadato_nombre',
            'FURWEB_METADATO_150',
            'NOMBRES'
        );

        $this->createIndex(
            'idx-metadato_paterno',
            'FURWEB_METADATO_150',
            'PRIMER_APELLIDO'
        );

        $this->createIndex(
            'idx-metadato_materno',
            'FURWEB_METADATO_150',
            'SEGUNDO_APELLIDO'
        );

        $this->createIndex(
            'idx-metadato_curp',
            'FURWEB_METADATO_150',
            'CURP'
        );
    }

    /**
     * @inheritdoc
     */
    public function safeDown()
    {
        echo "m180102_164525_index_metadato cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m180102_164525_index_metadato cannot be reverted.\n";

        return false;
    }
    */
}
