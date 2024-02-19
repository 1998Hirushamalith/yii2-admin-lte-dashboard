<?php

use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\FuelstationSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Fuelstations';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="fuelstation-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Fuelstation', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'Fs_id',
            'Fs_name',
            'Province_id',
            'District_id',
            'City_id',
            //'Address',
            //'Email:email',
            //'Contact_no',
            //'Weekly_fuel_quota',
            //'Population_density',
            //'Remarks',
            //'D_id',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, Fuelstation $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'Fs_id' => $model->Fs_id]);
                 }
            ],
        ],
    ]); ?>


</div>
