<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var siska\models\Wilayah $model */

$this->title = $model->nama_wilayah;
$this->params['breadcrumbs'][] = ['label' => 'Wilayah', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="wilayah-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Ubah', ['update', 'kode' => $model->kode], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Hapus', ['delete', 'kode' => $model->kode], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'kode',
            'nama_wilayah',
        ],
    ]) ?>

</div>
