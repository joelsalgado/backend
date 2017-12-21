<?php

use yii\db\Migration;


class m171212_182535_create_table_CAT_MUNICIPIOS_SEDESEM extends Migration
{

    public function safeUp()
    {
        $this->createTable('CAT_MUNICIPIO', [
            'ID' => $this->primaryKey(),
            "ENTIDADFEDERATIVAID" => $this->integer(2),
            "MUNICIPIOID" => $this->integer(3),
            "MUNICIPIOIDESPECIAL" => $this->integer(3),
            "MUNICIPIONOMBRE" => $this->string(60),
            "MUNICIPIOESTATUS" => $this->integer(1),
            "REGIONID" => $this->integer(3),
            "MUNICIPIOID_SBIS" => $this->integer(3),
            "REGIONID_SBIS" => $this->integer(3),
            "REGIONID_GAB" => $this->integer(3),
            "COINCIDES_CANTPROG" => $this->integer(3)
        ]);

        $this->addForeignKey(
            'FK-ENT-MUN',
            'CAT_MUNICIPIO',
            'ENTIDADFEDERATIVAID',
            'CAT_ENTIDAD_FEDERATIVA',
            'CVE_ENTIDAD_FEDERATIVA',
            'CASCADE'
        );
    }


    public function safeDown()
    {
        echo "m171212_182535_create_table_CAT_MUNICIPIOS_SEDESEM cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m171212_182535_create_table_CAT_MUNICIPIOS_SEDESEM cannot be reverted.\n";

        return false;
    }
    */
}
