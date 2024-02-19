<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Token */

$this->title = $model->T_id;
$this->params['breadcrumbs'][] = ['label' => 'Tokens', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="token-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'T_id' => $model->T_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'T_id' => $model->T_id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'T_id',
            'Fuel_Quota_type',
            'Fuel_Quota_usage',
            'Fuel_Quota_weekly_balance',
            'Date',
            'Time',
            'Validity_period',
            'Fs_id',
            'Vr_id',
            'P_id',
        ],
    ]) ?>

</div>
