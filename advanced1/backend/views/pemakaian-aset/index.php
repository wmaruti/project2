<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\PemakaianAsetSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Pemakaian Asets';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="pemakaian-aset-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Pemakaian Aset', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'kode',
            'tanggal',
            'qty_pemakaian',
            'keterangan',
            'kode_aset',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
