<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Vehicleregistration */

$this->title = 'Create Vehicleregistration';
$this->params['breadcrumbs'][] = ['label' => 'Vehicleregistrations', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="vehicleregistration-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
