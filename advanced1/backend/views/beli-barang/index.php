<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\BeliBarangSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Beli Barangs';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="beli-barang-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Beli Barang', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'idbelibarang',
            'tanggal',
            'jumlah_barang',
            'bayar',
            'idbarang',
            //'idpelanggan',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
