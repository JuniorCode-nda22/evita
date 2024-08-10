<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var siska\models\jenjangpendidikan $model */

$this->title = 'tambahkan Jenjangpendidikan';
$this->params['breadcrumbs'][] = ['label' => 'Jenjangpendidikans', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="jenjangpendidikan-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
