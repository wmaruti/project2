<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\BeliBarang */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="beli-barang-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'idbelibarang')->textInput() ?>

    <?= $form->field($model, 'tanggal')->textInput() ?>

    <?= $form->field($model, 'jumlah_barang')->textInput() ?>

    <?= $form->field($model, 'bayar')->textInput() ?>

    <?= $form->field($model, 'idbarang')->textInput() ?>

    <?= $form->field($model, 'idpelanggan')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
