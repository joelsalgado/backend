<?php

use yii\db\Migration;

class m130524_201442_init extends Migration
{
    public function up()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            // http://stackoverflow.com/questions/766809/whats-the-difference-between-utf8-general-ci-and-utf8-unicode-ci
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }

        $this->createTable('auth_rule', [
            'name' => $this->string()->notNull(),
            'data' => $this->integer(),
            'created_at' => $this->integer()->notNull(),
            'updated_at' => $this->integer()->notNull(),
            'PRIMARY KEY ([[name]])'
        ], $tableOptions);

        $this->createTable('auth_item', [
            'name' => $this->string(64)->notNull(),
            'type' => $this->smallInteger()->notNull(),
            'description' => $this->string(),
            'rule_name' => $this->string(64),
            'data' => $this->integer(),
            'created_at' => $this->integer(),
            'updated_at' => $this->integer(),
            'PRIMARY KEY ([[name]])',
        ], $tableOptions);

        $this->addForeignKey(
            'fk-item-rule',
            'auth_item',
            'rule_name',
            'auth_rule',
            'name',
            'CASCADE'
        );
        $this->createIndex(
            'idx-auth_item-type',
            'auth_item',
            'type'
        );

        $this->createTable('auth_item_child', [
            'parent' => $this->string(64)->notNull(),
            'child' => $this->string(64)->notNull(),
            'PRIMARY KEY ([[parent]], [[child]])',
        ], $tableOptions);

        $this->addForeignKey(
            'fk-child-item-parent',
            'auth_item_child',
            'parent',
            'auth_item',
            'name',
            'CASCADE'
        );

        $this->addForeignKey(
            'fk-child-item-child',
            'auth_item_child',
            'child',
            'auth_item',
            'name',
            'CASCADE'
        );

        $this->createTable('auth_assignment', [
            'item_name' => $this->string(64)->notNull(),
            'user_id' => $this->string(64)->notNull(),
            'created_at' => $this->integer(),
            'PRIMARY KEY ([[item_name]], [[user_id]])',
        ], $tableOptions);


        $this->addForeignKey(
            'fk-assignment-item',
            'auth_assignment',
            'item_name',
            'auth_item',
            'name',
            'CASCADE'
        );

        $this->createIndex(
            'auth_assignment_user_id_idx',
            'auth_assignment',
            'user_id'
        );

        $this->createTable('{{%user}}', [
            'id' => $this->primaryKey(),
            'username' => $this->string()->notNull(),
            'auth_key' => $this->string(32)->notNull(),
            'password_hash' => $this->string()->notNull(),
            'password_reset_token' => $this->string(),
            'email' => $this->string()->notNull(),
            'status' => $this->integer()->notNull(),
            'created_at' => $this->integer()->notNull(),
            'updated_at' => $this->integer()->notNull(),
        ], $tableOptions);
    }

    public function down()
    {
        $this->dropTable('{{%user}}');
    }
}
