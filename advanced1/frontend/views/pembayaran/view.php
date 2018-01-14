<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model frontend\models\Pembayaran */

$this->title = $model->idpembayaran;
$this->params['breadcrumbs'][] = ['label' => 'Pembayaran', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="pembayaran-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->idpembayaran], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->idpembayaran], [
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
            'idpembayaran',
            'tanggal',
            'idpemesanan',
            #'total_harga',
            'pemesanan.total',
            'bayar',
            //'bukti_pembayaran',
             [
        'attribute'=>'bukti_pembayaran',
        'label'=>'Bukti Pembayaran',
        'format'=>'raw',

        'value' => function ($viewgambar) {
          //$url = \Yii::getAlias('@backend/web/uploads/').$viewgambar->gambar;
        $url = 'http://localhost/advanced1/backend/web/uploads/'.$viewgambar->bukti_pembayaran;
          return Html::img($url, ['alt'=>'bukti_pembayaran','width'=>'400','height'=>'300']);
          }
        ],
        
        ],
    ]) ?>

</div>
