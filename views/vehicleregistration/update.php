<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Vehicleregistration */

$this->title = 'Update Vehicleregistration: ' . $model->Vr_id;
$this->params['breadcrumbs'][] = ['label' => 'Vehicleregistrations', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->Vr_id, 'url' => ['view', 'Vr_id' => $model->Vr_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="vehicleregistration-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
