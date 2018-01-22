<?php

use yii\db\Migration;

/**
 * Class m180119_194950_create_table_status_nav
 */
class m180119_194950_create_table_status_nav extends Migration
{

    private $table = 'STATUS_NAV';
    public function safeUp()
    {
        $this->createTable($this->table, [
            'FOLIO' => $this->primaryKey(),
            'N_PERIODO' => $this->integer(),
            'CVE_PROGRAMA' => $this->integer(),
            'FOLIO_RELACIONADO' => $this->string(16),
            'APARTADO1' => $this->integer()->defaultValue(0),
            'APARTADO2' => $this->integer()->defaultValue(0),
            'APARTADO3' => $this->integer()->defaultValue(0),
            'APARTADO4' => $this->integer()->defaultValue(0),
            'APARTADO5' => $this->integer()->defaultValue(0),
            'USU' => $this->string(80),
            'IP' => $this->string(80),
        ]);
    }


    public function safeDown()
    {
        echo "m180119_194950_create_table_status_nav cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m180119_194950_create_table_status_nav cannot be reverted.\n";

        return false;
    }
    */
}
