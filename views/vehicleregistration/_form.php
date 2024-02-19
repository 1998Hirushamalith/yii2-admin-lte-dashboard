<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Vehicleregistration */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="vehicleregistration-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'Vr_date')->textInput() ?>

    <?= $form->field($model, 'Vr_venue')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'U_id')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
