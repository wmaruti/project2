<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\PemakaianAsetSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="pemakaian-aset-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'kode') ?>

    <?= $form->field($model, 'tanggal') ?>

    <?= $form->field($model, 'qty_pemakaian') ?>

    <?= $form->field($model, 'keterangan') ?>

    <?= $form->field($model, 'kode_aset') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
