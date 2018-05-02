<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Usermaster */

$this->title = 'Create Usermaster Now';
$this->params['breadcrumbs'][] = ['label' => 'Usermasters', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="usermaster-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
