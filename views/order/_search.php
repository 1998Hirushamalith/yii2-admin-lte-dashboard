<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\OrderSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="order-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'Or_id') ?>

    <?= $form->field($model, 'Or_type') ?>

    <?= $form->field($model, 'Or_quantity') ?>

    <?= $form->field($model, 'Or_price') ?>

    <?= $form->field($model, 'Or_date') ?>

    <?php // echo $form->field($model, 'Quality_check') ?>

    <?php // echo $form->field($model, 'Fs_id') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
