<?php

use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\UserregistrationSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Userregistrations';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="userregistration-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Userregistration', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'U_name',
            'U_driving_license',
            'U_revenue_license',
            'U_insurance_card',
            'U_certificate_of_registration',
            //'U_ommission_certificate',
            //'U_contact',
            //'U_id',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, Userregistration $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'U_id' => $model->U_id]);
                 }
            ],
        ],
    ]); ?>


</div>
