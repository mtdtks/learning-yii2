<?php
/**
 * Created by IntelliJ IDEA.
 * User: t-matsuda
 * Date: 2018/05/08
 * Time: 15:59
 */

namespace app\models;

use phpDocumentor\Reflection\Types\Array_;

use app\components\validators\CountryValidator;
use app\components\validators\ImgChkValidator;
use app\components\validators\TelValidator;
use app\components\validators\UsermasterValidator;

use yii\base\Model;
//use app\components\validators\AjaxValidator;

class ValidatorModel extends Model
{
    private $_ruleList = [];
    public $value;

    public function rules()
    {
        return  [
            array_merge(['value'], $this->_ruleList)
        ];
    }

    public function setRules(array $rules)
    {
        $this->_ruleList = $rules;
    }

    public function attributeLabels()
    {
        return [
            'value' => 'value',
        ];
    }

}