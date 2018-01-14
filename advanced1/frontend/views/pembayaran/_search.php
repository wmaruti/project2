<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\PembayaranSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="pembayaran-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'idpembayaran') ?>

    <?= $form->field($model, 'tanggal') ?>

    <?= $form->field($model, 'total_harga') ?>

    <?= $form->field($model, 'bayar') ?>

    <?= $form->field($model, 'bukti_pembayaran') ?>

    <?php // echo $form->field($model, 'id_barang') ?>

    <?php // echo $form->field($model, 'idpemesanan') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
