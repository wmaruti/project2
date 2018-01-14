<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\PengajuanSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="pengajuan-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'idpengajuan') ?>

    <?= $form->field($model, 'tanggal') ?>

    <?= $form->field($model, 'nama_barang') ?>

    <?= $form->field($model, 'spesifikasi') ?>

    <?= $form->field($model, 'quantity') ?>

    <?php // echo $form->field($model, 'keterangan') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
