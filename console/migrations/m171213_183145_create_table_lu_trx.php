<?php

use yii\db\Migration;

/**
 * Class m171213_183145_create_table_lu_trx
 */
class m171213_183145_create_table_lu_trx extends Migration
{
    /**
     * @inheritdoc
     */
    public function safeUp()
    {
        $this->createTable('LU_TRX', [
            'TRX_ID' => $this->primaryKey(),
            "TRX_DESC" => $this->string(100)->defaultValue(''),
            "TRX_STATUS" => $this->string(1)->defaultValue('S'),
            "TRX_FECREG" => $this->date()
        ]);
    }

    /**
     * @inheritdoc
     */
    public function safeDown()
    {
        echo "m171213_183145_create_table_lu_trx cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m171213_183145_create_table_lu_trx cannot be reverted.\n";

        return false;
    }
    */
}
