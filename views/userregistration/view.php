<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Userregistration */

$this->title = $model->U_id;
$this->params['breadcrumbs'][] = ['label' => 'Userregistrations', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="userregistration-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'U_id' => $model->U_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'U_id' => $model->U_id], [
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
            'U_name',
            'U_driving_license',
            'U_revenue_license',
            'U_insurance_card',
            'U_certificate_of_registration',
            'U_ommission_certificate',
            'U_contact',
            'U_id',
        ],
    ]) ?>

</div>
