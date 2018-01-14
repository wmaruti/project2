<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\PemakaianAset */

$this->title = 'Update Pemakaian Aset: {nameAttribute}';
$this->params['breadcrumbs'][] = ['label' => 'Pemakaian Asets', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->kode, 'url' => ['view', 'id' => $model->kode]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="pemakaian-aset-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
