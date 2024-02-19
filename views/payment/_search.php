<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\PaymentSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="payment-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'P_id') ?>

    <?= $form->field($model, 'P_type') ?>

    <?= $form->field($model, 'P_date') ?>

    <?= $form->field($model, 'P_time') ?>

    <?= $form->field($model, 'Total_payment') ?>

    <?php // echo $form->field($model, 'U_id') ?>

    <?php // echo $form->field($model, 'Fs_id') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
