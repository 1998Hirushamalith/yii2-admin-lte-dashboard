<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Token */

$this->title = 'Update Token: ' . $model->T_id;
$this->params['breadcrumbs'][] = ['label' => 'Tokens', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->T_id, 'url' => ['view', 'T_id' => $model->T_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="token-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
