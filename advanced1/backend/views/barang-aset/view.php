<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\BarangAset */

$this->title = $model->kode_aset;
$this->params['breadcrumbs'][] = ['label' => 'Barang Asets', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="barang-aset-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->kode_aset], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->kode_aset], [
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
            'kode_aset',
            'nama_barang',
            'stock',
            'harga',
        ],
    ]) ?>

</div>
