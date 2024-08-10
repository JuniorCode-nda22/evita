<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var siska\models\Wilayah $model */

$this->title = 'tamabah Wilayah';
$this->params['breadcrumbs'][] = ['label' => 'Wilayah', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="wilayah-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
