<?php

use siska\models\Prodi;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\widgets\Pjax;

// krajee
use kartik\grid\GridView;
use kartik\grid\ActionColumn;

// model
use siska\models\Fakultas;

/** @var yii\web\View $this */
/** @var siska\models\ProdiSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Program studi';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="prodi-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Program Prodi', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php Pjax::begin(); ?>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
            'kode',
            'nama_prodi',
            [
                'attribute' => 'fakultas_id',
                'value' => 'fakultas.nama_fakultas',
                // filtering menggunakan dropdown
                'filterType' => GridView::FILTER_SELECT2,
                'filter' => Fakultas::dropdown(),
                'filterWidgetOptions' => [
                    'pluginOptions' => ['allowClear' => true],
                ],
                'filterInputOptions' => ['placeholder' => 'Pilih...'],
            ],
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, Prodi $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id' => $model->id]);
                }
            ],
        ],
    ]); ?>

    <?php Pjax::end(); ?>

</div>
