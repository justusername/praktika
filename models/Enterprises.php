<?php

namespace app\models;

use app\controllers\LeadersController;
use Yii;

/**
 * This is the model class for table "prakt_enterprises".
 *
 * @property integer $CODE
 * @property string $TITLE
 * @property string $REGION
 * @property string $CITY
 * @property string $ADDRESS
 */
class Enterprises extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'prakt_enterprises';
        return 'prakt_leaders';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['TITLE', 'REGION', 'CITY', 'ADDRESS'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'CODE' => 'Код',
            'TITLE' => 'Название',
            'REGION' => 'Область',
            'CITY' => 'Город',
            'ADDRESS' => 'Адрес',
        ];
    }
}
