<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var siska\models\Prodi $model */

$this->title = 'Update Prodi: ' . $model->nama_prodi;
$this->params['breadcrumbs'][] = ['label' => 'Program Studi', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->nama_prodi, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="prodi-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
