<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Fuelstation */

$this->title = 'Update Fuelstation: ' . $model->Fs_id;
$this->params['breadcrumbs'][] = ['label' => 'Fuelstations', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->Fs_id, 'url' => ['view', 'Fs_id' => $model->Fs_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="fuelstation-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
