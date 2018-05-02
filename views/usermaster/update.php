<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Usermaster */

$this->title = 'Update Usermaster: {nameAttribute}';
$this->params['breadcrumbs'][] = ['label' => 'Usermasters', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="usermaster-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
