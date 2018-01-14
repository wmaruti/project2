<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use backend\models\Jadwal;
use backend\models\Status;
use backend\models\Pelanggan;
use yii\jui\DatePicker;

/* @var $this yii\web\View */
/* @var $model frontend\models\Pemesanan */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="pemesanan-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model,'tanggal')->widget(DatePicker::className(),[
        'dateFormat' => 'yyyy-MM-dd',
        'clientOptions' => ['defaultDate' => 'today']
    ]) ?>

    <?= $form->field($model, 'lama_sewa')->textInput() ?>

    <?php echo $form->field($model, 'idjadwal')->label('Jam')
    ->dropDownList(ArrayHelper::map(Jadwal::find()->asArray()->all(),
    'idjadwal','jam_Sewa'),['prompt'=>'- Pilih -',' multiple'=>'multiple'])
    ->hint('Pilih Jam Pemakaian'); ?>

  

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
