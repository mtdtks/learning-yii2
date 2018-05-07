<?php

namespace app\models;

use Yii;
use yii\base\Model;
use app\components\validators\UsermasterValidator;
use app\components\validators\TelValidator;

/**
 * This is the model class for table "usermaster".
 *
 * @property int $id ユーザーID
 * @property string $user_name ユーザー名
 * @property string $mail_address メアド
 * @property string $tel_number 電話番号
 */
class Usermaster extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'usermaster';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [

            [['id', 'mail_address'], 'required'],
            [['id'], 'integer'],
            [['user_name'], 'string', 'max' => 30],
            [['mail_address'], 'string', 'max' => 50],
            [['tel_number'], 'string', 'max' => 18],
            [['id'], 'unique'],
            ['mail_address', 'email', 'message' => 'メルアドではない'],
            ['tel_number', TelValidator::className()],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ユーザーID',
            'user_name' => 'ユーザー名',
            'mail_address' => 'メアド',
            'tel_number' => '電話番号',
        ];
    }

    /**
     * @inheritdoc
     * @return UsermasterQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new UsermasterQuery(get_called_class());
    }
}
