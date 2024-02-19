<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Userregistration */

$this->title = 'Create Userregistration';
$this->params['breadcrumbs'][] = ['label' => 'Userregistrations', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="userregistration-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
