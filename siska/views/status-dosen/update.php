<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var siska\models\StatusDosen $model */

$this->title = 'Ubah Status Dosen: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Status Dosens', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'status_dosen' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="status-dosen-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
