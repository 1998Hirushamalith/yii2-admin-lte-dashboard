<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Fuelstation */

$this->title = $model->Fs_id;
$this->params['breadcrumbs'][] = ['label' => 'Fuelstations', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="fuelstation-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'Fs_id' => $model->Fs_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'Fs_id' => $model->Fs_id], [
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
            'Fs_id',
            'Fs_name',
            'Province_id',
            'District_id',
            'City_id',
            'Address',
            'Email:email',
            'Contact_no',
            'Weekly_fuel_quota',
            'Population_density',
            'Remarks',
            'D_id',
        ],
    ]) ?>

</div>
