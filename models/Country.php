<?php

namespace app\models;

use Yii;
use yii\base\Model;
use app\components\validators\CountryValidator;

/**
 * This is the model class for table "country".
 *
 * @property string $code
 * @property string $name
 * @property int $population
 */

class Country extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        //?
        return 'country';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        //validation
        return [
            [['code', 'name'], 'required'],
            [['population'], 'integer'],
            [['population'], CountryValidator::className()],
            [['code'], 'string', 'max' => 2],
            [['name'], 'string', 'max' => 52],
            [['code'], 'unique'],
            //['name', CountryValidator::className() ]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'code' => 'Code',
            'name' => 'Name',
            'population' => 'Population',
        ];
    }

    /**
     * @inheritdoc
     * @return CountryQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new CountryQuery(get_called_class());
    }
}
