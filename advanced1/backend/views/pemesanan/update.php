<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Pemesanan */

$this->title = 'Update Pemesanan: {nameAttribute}';
$this->params['breadcrumbs'][] = ['label' => 'Pemesanans', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->idpemesanan, 'url' => ['view', 'id' => $model->idpemesanan]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="pemesanan-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
