<?php

use yii\helpers\Html;
// kraje
use kartik\form\ActiveForm;
use kartik\select2\Select2;
// model
use siska\models\JenjangPendidikan;

/** @var yii\web\View $this */
/** @var siska\models\jenjangpendidikan $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="jenjangpendidikan-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'jenjang')->widget(Select2::classname(), [
        'data' => JenjangPendidikan::dropdown(),
        'options' => ['placeholder' => 'Pilih jenjang pendidikan...'],
        'pluginOptions' => [
            'allowClear' => true
        ],
    ]); ?>
    <div class="form-group">
        <?= Html::submitButton('simpan ', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
