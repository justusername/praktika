<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "prakt_leaders".
 *
 * @property integer $LCODE
 * @property integer $CODE
 * @property string $FNAME
 * @property string $NAME
 * @property string $PATRONYMIC
 * @property string $EMAIL
 * @property string $PHONE
 */
class Leaders extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'prakt_leaders';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['CODE'], 'integer'],
            [['FNAME', 'NAME', 'PATRONYMIC', 'EMAIL', 'PHONE'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'LCODE' => 'Lcode',
            'CODE' => 'Code',
            'FNAME' => 'Fname',
            'NAME' => 'Name',
            'PATRONYMIC' => 'Patronymic',
            'EMAIL' => 'Email',
            'PHONE' => 'Phone',
        ];
    }
}
