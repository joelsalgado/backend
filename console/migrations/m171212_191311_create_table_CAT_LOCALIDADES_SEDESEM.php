<?php

use yii\db\Migration;


class m171212_191311_create_table_CAT_LOCALIDADES_SEDESEM extends Migration
{

    public function safeUp()
    {
        $this->createTable('CAT_LOCALIDAD', [
            'ID' => $this->primaryKey(),
            "CVE_ENTIDAD_FEDERATIVA" => $this->integer(2)->defaultValue(0),
            "CVE_MUNICIPIO" => $this->integer(3)->defaultValue(0),
            "NUMINEGI_ID" => $this->string(6)->defaultValue(''),
            "CVE_LOCALIDAD" => $this->integer(16)->defaultValue(0),
            "DESC_LOCALIDAD" => $this->string(150)->defaultValue(''),
            "LOC_TIPO" => $this->string(100)->defaultValue(''),
            "LOC_LATITUD" => $this->float(126)->defaultValue(0),
            "LOC_LONGITUD" => $this->float(126)->defaultValue(0),
            "LOC_LATDEC" => $this->float(126)->defaultValue(0),
            "LOC_LONGDEC" => $this->float(126)->defaultValue(0),
            "LOC_ALTITUD" => $this->float(126)->defaultValue(0),
            "CARTA_ID" => $this->string(6)->defaultValue(''),
            "PTOT" => $this->string(7)->defaultValue(''),
            "PMAS" => $this->string(7)->defaultValue(''),
            "PFEM" => $this->string(6)->defaultValue(''),
            "VTOT" => $this->string(6)->defaultValue(''),
            "ZONA_ID" => $this->integer(3),
            "REGION_ID" => $this->integer(3),
            "D_CODIGO" => $this->string(5)->defaultValue(''),
            "DESCRI" => $this->string(150)->defaultValue(''),
        ]);

        $this->addForeignKey(
            'FK-ENT-LOC',
            'CAT_LOCALIDAD',
            'CVE_ENTIDAD_FEDERATIVA',
            'CAT_ENTIDAD_FEDERATIVA',
            'CVE_ENTIDAD_FEDERATIVA',
            'CASCADE'
        );
    }


    public function safeDown()
    {
        echo "m171212_191311_create_table_CAT_LOCALIDADES_SEDESEM cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m171212_191311_create_table_CAT_LOCALIDADES_SEDESEM cannot be reverted.\n";

        return false;
    }
    */
}
