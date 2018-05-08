<?php
/**
 * Created by IntelliJ IDEA.
 * User: t-matsuda
 * Date: 2018/05/08
 * Time: 12:26
 */

namespace app\components\validators;

use yii\validators\Validator;

class ImgChkValidator extends Validator
{
    public function validateAttribute($model, $attribute)
    {
        if (!preg_match('/a+/', $model->attributes)) {
            $this->addError($model, $attribute, 'test message');
        }
    }
//    public function clientValidateAttribute($model, $attribute, $view)
//    {
//        return<<<JS
//    var def = $.Deferred();
//    var img = new Image();
//    img.onload = function(){
//        if (this.width > 150) {
//            messages.push('画像のサイズが150より大きいな');
//        }
//        def.resolve();
//    }
//    var reader = new FileReader();
//    reader.onloadend = function(){
//        img.src = reader.result;
//    }
//    reader.readAsDataUrl(value);
//    deferred.push(def);
//JS;
//
//    }


}