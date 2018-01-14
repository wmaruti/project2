<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\Divisi */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="divisi-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'nama_divisi')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'gaji')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
