<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Pengajuan */

$this->title = 'Update Pengajuan: {nameAttribute}';
$this->params['breadcrumbs'][] = ['label' => 'Pengajuans', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->idpengajuan, 'url' => ['view', 'id' => $model->idpengajuan]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="pengajuan-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
