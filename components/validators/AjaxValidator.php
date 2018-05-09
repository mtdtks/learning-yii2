<?php
/**
 * Created by IntelliJ IDEA.
 * User: t-matsuda
 * Date: 2018/05/09
 * Time: 12:24
 */

namespace app\components\validators;

use yii\validators\Validator;

class AjaxValidator extends Validator
{

    public function clientValidateAttribute($model, $attribute, $view)
    {
        $className = str_replace('\\', '\\\\', self::className());
        return <<<JS
        deferred.push($.get("/check/index", {value: value, rules: ['$className']}).done(function(data) {
            if ('' !== data) {
                messages.push(data);
            }
        }));
JS;
    }
}