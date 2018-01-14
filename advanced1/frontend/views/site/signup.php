<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \frontend\models\SignupForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

$this->title = 'Signup';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-signup">
    <h1><?= Html::encode($this->title) ?></h1>

    <p>Please fill out the following fields to signup:</p>

    <div class="row">
        <div class="col-lg-5">
            <?php $form = ActiveForm::begin(['id' => 'form-signup']); ?>

                <?= $form->field($model, 'username')->textInput(['autofocus' => true]) ?>

                <?= $form->field($model, 'email') ?>        

                <?= $form->field($model, 'password')->passwordInput() ->hint('min 6 character')?>

                <?= $form->field($plg, 'nama')->textInput(['maxlength' => true]) ?>

                <?= $form->field($plg, 'club')->textInput(['maxlength' => true]) ?>
                <?= $form->field($plg, 'alamat')->textInput(['maxlength' => true]) ?>

                <?= $form->field($plg, 'no_telpon')->textInput(['maxlength' => true]) ?>

                <div class="form-group">
                    <?= Html::submitButton('Signup', ['class' => 'btn btn-primary', 'name' => 'signup-button']) ?>
                </div>

            <?php ActiveForm::end(); ?>
        </div>
    </div>
</div>
