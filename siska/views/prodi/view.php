<?php

use yii\helpers\Html;

// krajee
use kartik\detail\DetailView;

/** @var yii\web\View $this */
/** @var siska\models\Prodi $model */

$this->title = $model->nama_prodi;
$this->params['breadcrumbs'][] = ['label' => 'Program studi', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="prodi-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
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
            'nama_prodi',
            ['attribute'=>'fakultas_id',
            'value'=>$model->fakultas->nama_fakultas]
           
        ],
    ]) ?>

</div>
