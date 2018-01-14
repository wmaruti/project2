<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\BarangAset */

$this->title = 'Create Barang Aset';
$this->params['breadcrumbs'][] = ['label' => 'Barang Asets', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="barang-aset-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
