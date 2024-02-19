<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Userregistration */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="userregistration-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'U_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'U_driving_license')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'U_revenue_license')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'U_insurance_card')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'U_certificate_of_registration')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'U_ommission_certificate')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'U_contact')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
