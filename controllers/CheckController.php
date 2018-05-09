<?php
/**
 * Created by IntelliJ IDEA.
 * User: t-matsuda
 * Date: 2018/05/08
 * Time: 16:15
 */

namespace app\controllers;

use app\models\ValidatorModel;
use Yii;
use yii\web\Controller;

class CheckController extends Controller
{
    public function actionIndex()
    {
        $model = new ValidatorModel();
        $model->setRules(Yii::$app->request->get('rules', []));
        $model->load(Yii::$app->request->get(), '');
        if ($model->validate()) {
            return ''; // 成功したら空文字を返す必要
        } else {
            return $model->errors['value'][0]; //またはJSONに展開する
        }
    }

}