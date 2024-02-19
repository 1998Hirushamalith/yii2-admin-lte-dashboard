<?php

use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\TokenSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Tokens';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="token-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Token', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'T_id',
            'Fuel_Quota_type',
            'Fuel_Quota_usage',
            'Fuel_Quota_weekly_balance',
            'Date',
            //'Time',
            //'Validity_period',
            //'Fs_id',
            //'Vr_id',
            //'P_id',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, Token $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'T_id' => $model->T_id]);
                 }
            ],
        ],
    ]); ?>


</div>
