<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\FuelstationSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="fuelstation-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'Fs_id') ?>

    <?= $form->field($model, 'Fs_name') ?>

    <?= $form->field($model, 'Province_id') ?>

    <?= $form->field($model, 'District_id') ?>

    <?= $form->field($model, 'City_id') ?>

    <?php // echo $form->field($model, 'Address') ?>

    <?php // echo $form->field($model, 'Email') ?>

    <?php // echo $form->field($model, 'Contact_no') ?>

    <?php // echo $form->field($model, 'Weekly_fuel_quota') ?>

    <?php // echo $form->field($model, 'Population_density') ?>

    <?php // echo $form->field($model, 'Remarks') ?>

    <?php // echo $form->field($model, 'D_id') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
