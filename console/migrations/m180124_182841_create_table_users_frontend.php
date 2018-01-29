<?php

use yii\db\Migration;

/**
 * Class m180124_182841_create_table_users_frontend
 */
class m180124_182841_create_table_users_frontend extends Migration
{

    public function safeUp()
    {
        $this->createTable('users_frontend', [
            'id' => $this->primaryKey(),
            'name' => $this->string(100)->notNull(),
            'last_name' => $this->string(100)->notNull(),
            'last_name2' => $this->string(100)->notNull(),
            'program' => $this->integer(),
            'period' => $this->integer(),
            'birthday' => $this->date(),
            'user' => $this->string(50)->notNull(),
            'password' => $this->string(50)->notNull(),
            'email' => $this->string(100),
            'status' => $this->integer(2)->notNull(),
        ]);
    }

    public function safeDown()
    {
        echo "m180124_182841_create_table_users_frontend cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m180124_182841_create_table_users_frontend cannot be reverted.\n";

        return false;
    }
    */
}
