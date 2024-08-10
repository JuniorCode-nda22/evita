<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var siska\models\StatusDosen $model */

$this->title = 'Tambah Status Dosen';
$this->params['breadcrumbs'][] = ['label' => 'Status Dosens', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="status-dosen-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
