<?php
/**
 * Created by IntelliJ IDEA.
 * User: t-matsuda
 * Date: 2018/04/25
 * Time: 9:08
 */

namespace app\components\validators;

class TelValidator extends AjaxValidator
{

    public function validateAttribute($model, $attribute) //必須っぽい
    {
        // 電話番号正規表現
        // /^[0-9]{2,4}-[0-9]{2,4}-[0-9]{3,4}$/

        if (!preg_match('/^[0-9]{2,4}-?[0-9]{2,4}-?[0-9]{3,4}$/', $model->$attribute)) {
            //$this->addError($model, $attribute, '電話番号では多分ありませんかもしれません');
            $this->addError($model, $attribute, 'テストメッセージ');
        }
    }

//    public function clientValidateAttribute($model, $attribute, $view)
//    {
//
//        $test = 'test';
        //$usermaster = json_encode(Usermaster::find()->select('id')->asArray()->column());
        //$message = json_encode($this->message, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE);

//        return <<<JS
//if ($.inArray(value, $usermaster) === -1) { //inArray 第一引数が配列中にあればtrue
//    //messages.push('test comment');   //messagesはmessageの配列ぽい
//    messages.push($usermaster);
//}
//JS;
//
//        $tel_regx = '/^[0-9]{2,4}-?[0-9]{2,4}-?[0-9]{3,4}$/';
//        return <<<JS
///*
//attribute: 検証される属性の名前。
//value: 検証される値。
//messages: 属性に対する検証のエラー・メッセージを保持するために使用される配列。
//deferred: Deferred オブジェクトをプッシュして入れることが出来る配列 (次の項で説明します)。
//*/
//if (!value.match($tel_regx)){
//  messages.push('電話ではありません');
//}
//
//JS;
//    }
//        $className = str_replace('\\', '\\\\', $this->class());
//        return <<<JS
//        deferred.push($.get("/check/index", {value: value, rules: ['$className']}).done(function(data) {
//            if ('' !== data) {
//                messages.push(data);
//            }
//        }));
//JS;
//    }
}
