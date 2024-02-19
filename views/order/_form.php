<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Order */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="order-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'Or_type')->textInput() ?>

    <?= $form->field($model, 'Or_quantity')->textInput() ?>

    <?= $form->field($model, 'Or_price')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Or_date')->textInput() ?>

    <?= $form->field($model, 'Quality_check')->textInput() ?>

    <?= $form->field($model, 'Fs_id')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
