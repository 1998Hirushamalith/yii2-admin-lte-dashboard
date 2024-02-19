<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Distributors */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="distributors-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'Location')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Time')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
