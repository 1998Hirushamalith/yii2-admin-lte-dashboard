<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\UserregistrationSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="userregistration-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'U_name') ?>

    <?= $form->field($model, 'U_driving_license') ?>

    <?= $form->field($model, 'U_revenue_license') ?>

    <?= $form->field($model, 'U_insurance_card') ?>

    <?= $form->field($model, 'U_certificate_of_registration') ?>

    <?php // echo $form->field($model, 'U_ommission_certificate') ?>

    <?php // echo $form->field($model, 'U_contact') ?>

    <?php // echo $form->field($model, 'U_id') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
