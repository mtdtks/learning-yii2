<?php
/**
 * Created by IntelliJ IDEA.
 * User: t-matsuda
 * Date: 2018/05/02
 * Time: 13:33
 */

use yii\helpers\Html;
?>

<p>あなたは次の情報を入力しました</p>

<ul>
    <li><label>名前</label>: <?= Html::encode($model->name) ?></li>
    <li><label>メール</label>: <?= Html::encode($model->email) ?></li>
</ul>
