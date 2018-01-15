<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel frontend\models\PembayaranSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Pembayarans';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="pembayaran-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'idpembayaran',
            'tanggal',
            #'total_harga',
            'pemesanan.total',
            'bayar',
            'bukti_pembayaran',
            'status.status',
        
            #'pemesanan.idstatus',

            ['class' => 'yii\grid\ActionColumn', 'template' =>'{view}'],
        ],
    ]); ?>
</div>
