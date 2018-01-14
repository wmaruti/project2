<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\BeliBarang */

$this->title = 'Create Beli Barang';
$this->params['breadcrumbs'][] = ['label' => 'Beli Barangs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="beli-barang-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
