<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var siska\models\Prodi $model */

$this->title = 'Tambah Program Prodi';
$this->params['breadcrumbs'][] = ['label' => 'Program Studi', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="prodi-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
