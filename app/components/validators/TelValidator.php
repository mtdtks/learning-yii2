<?php
/**
 * Created by IntelliJ IDEA.
 * User: t-matsuda
 * Date: 2018/04/25
 * Time: 9:08
 */

namespace app\components\validators;
use yii\validators\Validator;

class TelValidator extends Validator
{
/*
    public function validateAttribute($model, $attribute)
    {
        // 電話番号正規表現
        // /^[0-9]{2,4}-[0-9]{2,4}-[0-9]{3,4}$/

        //var_dump($model);
        var_dump($attribute);
        //var_dump();
        if(!preg_match("/^[0-9]{2,4}-?[0-9]{2,4}-?[0-9]{3,4}$/", $model->$attribute)){
            $this->addError($model, $attribute, '電話番号では多分ありませんかもしれません');
        }

    }
*/


    public function validateAttribute($model, $attribute)
    {
        // 電話番号正規表現
        // /^[0-9]{2,4}-?[0-9]{2,4}-?[0-9]{3,4}$/

        ////var_dump($model);
        var_dump($attribute);
        //var_dump();
        if(!preg_match("/^[0-9]{2,4}-?[0-9]{2,4}-?[0-9]{3,4}$/", $model->$attribute)){
            $this->addError($model, $attribute, '電話番号では多分ありませんかもしれません');
        }


    }
}