<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\UsermasterSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Usermasters';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="usermaster-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Usermaster', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <p><?php //var_dump($this); ?></p>
    <p>
    <!-- ここにボタン作る -->
    <!-- Ajaxで切り替えでは… -->
        <input type="radio" name="example" value="and" checked>and
        <input type="radio" name="example" value="or" >or
    </p>

<?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'user_name',
            'mail_address',
            'tel_number',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
