<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\PemakaianAset */

$this->title = 'Create Pemakaian Aset';
$this->params['breadcrumbs'][] = ['label' => 'Pemakaian Asets', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="pemakaian-aset-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
