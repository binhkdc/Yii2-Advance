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

        $this->createTable('{{%user}}', [
            'id' => $this->primaryKey(),
            'username' => $this->string()->notNull()->unique(),
            'password' => $this->string()->notNull(),
            'auth_key' => $this->string(32)->defaultValue(null),
            'password_reset_token' => $this->string()->unique(),
            'name' => $this->string()->notNull(),
            'email' => $this->string()->notNull(),
            'tel' => $this->string(12)->defaultValue(null),
            'referral_code' => $this->string()->notNull()->unique(),
            'role' => $this->smallInteger(3)->defaultValue(0)->comment("0: user, 1: admin"),
            'created_at' => $this->datetime(),
            'updated_at' => $this->datetime(),
            'status' => $this->smallInteger(3)->defaultValue(1)->comment("0: inactive, 1: active"),
            'avatar' => $this->string()->defaultValue(null),
            'banner' => $this->string()->defaultValue(null),
            'note' => $this->string()->defaultValue(null),
        ], $tableOptions);
    }

    public function down()
    {
        $this->dropTable('{{%user}}');
    }
}
