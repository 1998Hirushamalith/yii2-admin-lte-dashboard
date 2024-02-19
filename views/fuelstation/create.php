<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Fuelstation */

$this->title = 'Create Fuelstation';
$this->params['breadcrumbs'][] = ['label' => 'Fuelstations', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="fuelstation-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
