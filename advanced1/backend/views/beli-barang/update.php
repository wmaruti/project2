<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\BeliBarang */

$this->title = 'Update Beli Barang: {nameAttribute}';
$this->params['breadcrumbs'][] = ['label' => 'Beli Barangs', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->idbelibarang, 'url' => ['view', 'id' => $model->idbelibarang]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="beli-barang-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
