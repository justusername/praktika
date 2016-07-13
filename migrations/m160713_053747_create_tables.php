<?php

use yii\db\Schema;
use yii\db\Migration;

class m160713_053747_create_tables extends Migration
{
    public function Up()
    {
        $this->createTable('{{%leaders}}', [
            'LCODE' => Schema::TYPE_PK,
            'CODE' => Schema::TYPE_INTEGER,
            'FNAME' => Schema::TYPE_STRING,
            'NAME' => Schema::TYPE_STRING,
            'PATRONYMIC' => Schema::TYPE_STRING,
            'EMAIL' => Schema::TYPE_STRING,
            'PHONE' => Schema::TYPE_STRING
        ]);

        $this->createTable('{{%enterprises}}', [
            'CODE' => Schema::TYPE_PK,
            'TITLE' => Schema::TYPE_STRING ,
            'REGION' => Schema::TYPE_STRING ,
            'CITY' => Schema::TYPE_STRING ,
            'ADDRESS' => Schema::TYPE_STRING ,
        ]);
    }


    public function down()
    {
        $this->dropTable('enterprises');
        $this->dropTable('leaders');

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
