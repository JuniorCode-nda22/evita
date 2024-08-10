<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var siska\models\jenjangpendidikan $model */

$this->title = 'Update Jenjangpendidikan: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Jenjangpendidikan', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'jenjang' => $model->jenjang]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="jenjangpendidikan-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
