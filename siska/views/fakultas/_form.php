<?php

use siska\models\Fakultas;
// krajee
use kartik\form\ActiveForm;
use kartik\select2\Select2;
use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var siska\models\Fakultas $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="fakultas-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'kode')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'nama_fakultas')->widget(Select2::classname(), [
        'data' => Fakultas::dropdown(),
        'options' => ['placeholder' => 'Pilih Fakultas...'],
        'pluginOptions' => [
            'allowClear' => true
        ],
    ]); ?>

    <div class="form-group">
        <?= Html::submitButton('Simpan', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
