<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\PemesananSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="pemesanan-search">

    <?php $form = ActiveForm::begin([
        'action' => ['lihat'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'idpemesanan') ?>


    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
