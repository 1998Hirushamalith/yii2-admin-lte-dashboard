<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Distributors */

$this->title = 'Update Distributors: ' . $model->D_id;
$this->params['breadcrumbs'][] = ['label' => 'Distributors', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->D_id, 'url' => ['view', 'D_id' => $model->D_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="distributors-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
