<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\DistributorsSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="distributors-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'D_id') ?>

    <?= $form->field($model, 'D_name') ?>

    <?= $form->field($model, 'Location') ?>

    <?= $form->field($model, 'Time') ?>

    <?= $form->field($model, 'Scan_status') ?>

    <?php // echo $form->field($model, 'Fs_id') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
