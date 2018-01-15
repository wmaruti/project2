<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use backend\models\Pemesanan;


/* @var $this yii\web\View */
/* @var $model backend\models\Pembayaran */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="pembayaran-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'idpembayaran')->textInput() ?>

    <?= $form->field($model, 'tanggal')->textInput() ?>

    <?= $form->field($model, 'total_harga')->textInput() ?>

    <?= $form->field($model, 'bayar')->textInput() ?>

    <?= $form->field($model, 'bukti_pembayaran')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'idpemesanan')->label('Jam')
    ->dropDownList(ArrayHelper::map(Pemesanan::find()->asArray()->all(),
    'idpemesanan','idpemesanan',SORT_ASC),['prompt'=>'- Pilih -'])
    ->hint('Pilih'); ?> 

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>


