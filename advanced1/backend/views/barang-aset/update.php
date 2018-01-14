<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\BarangAset */

$this->title = 'Update Barang Aset: ' . $model->kode_aset;
$this->params['breadcrumbs'][] = ['label' => 'Barang Asets', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->kode_aset, 'url' => ['view', 'id' => $model->kode_aset]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="barang-aset-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
