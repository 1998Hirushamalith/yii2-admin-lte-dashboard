<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\VehicleregistrationSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="vehicleregistration-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'Vr_id') ?>

    <?= $form->field($model, 'Vr_date') ?>

    <?= $form->field($model, 'Vr_venue') ?>

    <?= $form->field($model, 'U_id') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
