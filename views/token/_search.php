<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\TokenSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="token-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'T_id') ?>

    <?= $form->field($model, 'Fuel_Quota_type') ?>

    <?= $form->field($model, 'Fuel_Quota_usage') ?>

    <?= $form->field($model, 'Fuel_Quota_weekly_balance') ?>

    <?= $form->field($model, 'Date') ?>

    <?php // echo $form->field($model, 'Time') ?>

    <?php // echo $form->field($model, 'Validity_period') ?>

    <?php // echo $form->field($model, 'Fs_id') ?>

    <?php // echo $form->field($model, 'Vr_id') ?>

    <?php // echo $form->field($model, 'P_id') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
