<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Fuelstation */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="fuelstation-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'Fs_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Province_id')->textInput() ?>

    <?= $form->field($model, 'District_id')->textInput() ?>

    <?= $form->field($model, 'City_id')->textInput() ?>

    <?= $form->field($model, 'Address')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Email')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Contact_no')->textInput() ?>

    <?= $form->field($model, 'Weekly_fuel_quota')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Population_density')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Remarks')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'D_id')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
