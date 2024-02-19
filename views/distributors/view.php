<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Distributors */

$this->title = $model->D_id;
$this->params['breadcrumbs'][] = ['label' => 'Distributors', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="distributors-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'D_id' => $model->D_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'D_id' => $model->D_id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'D_id',
            'D_name',
            'Location',
            'Time',
            'Scan_status',
            'Fs_id',
        ],
    ]) ?>

</div>
