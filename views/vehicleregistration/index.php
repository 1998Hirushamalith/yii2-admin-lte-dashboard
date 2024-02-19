<?php

use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\VehicleregistrationSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Vehicleregistrations';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="vehicleregistration-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Vehicleregistration', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'Vr_id',
            'Vr_date',
            'Vr_venue',
            'U_id',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, Vehicleregistration $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'Vr_id' => $model->Vr_id]);
                 }
            ],
        ],
    ]); ?>


</div>
