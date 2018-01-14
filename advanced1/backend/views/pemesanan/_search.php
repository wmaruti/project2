<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\PemesananSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="pemesanan-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'idpemesanan') ?>

    <?= $form->field($model, 'tanggal') ?>

    <?= $form->field($model, 'lama_sewa') ?>

    <?= $form->field($model, 'total') ?>

    <?= $form->field($model, 'idstatus') ?>

    <?php // echo $form->field($model, 'idjadwal') ?>

    <?php // echo $form->field($model, 'idpelanggan') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
