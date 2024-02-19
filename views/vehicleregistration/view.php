<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Vehicleregistration */

$this->title = $model->Vr_id;
$this->params['breadcrumbs'][] = ['label' => 'Vehicleregistrations', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="vehicleregistration-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'Vr_id' => $model->Vr_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'Vr_id' => $model->Vr_id], [
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
            'Vr_id',
            'Vr_date',
            'Vr_venue',
            'U_id',
        ],
    ]) ?>

</div>
