<?php
/**
 * Created by IntelliJ IDEA.
 * User: t-matsuda
 * Date: 2018/04/24
 * Time: 17:12
 */

namespace app\components\validators;
use yii\validators\Validator;

class UsermasterValidator extends Validator
{
    public function validateAttribute($model, $attribute)
    {
        var_dump($model->attributes);
        if (!in_array($model->$attribute, ['USA', 'Indonesia'])) {
            $this->addError($model, $attribute, '国は "{country1}" または "{country2}" でなければなりません。', ['country1' => 'USA', 'country2' => 'Indonesia']);
        }

    }

}