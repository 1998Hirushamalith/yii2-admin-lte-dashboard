<?php

use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\DistributorsSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Distributors';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="distributors-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Distributors', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'D_id',
            'D_name',
            'Location',
            'Time',
            'Scan_status',
            //'Fs_id',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, Distributors $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'D_id' => $model->D_id]);
                 }
            ],
        ],
    ]); ?>


</div>
