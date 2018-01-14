<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Divisi */

$this->title = 'Update Divisi: ' . $model->iddivisi;
$this->params['breadcrumbs'][] = ['label' => 'Divisis', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->iddivisi, 'url' => ['view', 'id' => $model->iddivisi]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="divisi-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
