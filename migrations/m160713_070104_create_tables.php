<?php

use yii\db\Schema;
use yii\db\Migration;

class m160713_070104_create_tables extends Migration
{
    public function Up()
    {
        $this->createTable('{{%leaders}}', [
            'LCODE' => $this->primaryKey(),
            'CODE' => $this->integer(),
            'FNAME' => $this->string(),
            'NAME' => $this->string(),
            'PATRONYMIC' => $this->string(),
            'EMAIL' => $this->string(),
            'PHONE' => $this->string()
        ]);

        $this->createTable('{{%enterprises}}', [
            'CODE' => $this->primaryKey(),
            'TITLE' => $this->string() ,
            'REGION' => $this->string() ,
            'CITY' => $this->string() ,
            'ADDRESS' => $this->string() ,
        ]);
        $this->addForeignKey('CODE', '{{%leaders}}', 'CODE', '{{%enterprises}}', 'id', 'SET NULL', 'CASCADE');
    }


    public function down()
    {
        $this->dropTable('{{%enterprises}}');
        $this->dropTable('{{%leaders}}');

    }

    /*
    // Use safeUp/safeDown to run migration code within a transaction
    public function safeUp()
    {
    }

    public function safeDown()
    {
    }
    */
}
