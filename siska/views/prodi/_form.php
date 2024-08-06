<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use kartik\select2\Select2;
use siska\models\Fakultas;

/** @var yii\web\View $this */
/** @var siska\models\Prodi $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="prodi-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'kode')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'nama_prodi')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'fakultas_id')->widget(Select2::className(), [
        'data' => Fakultas::dropdown(), // Array asosiatif
        'options' => ['placeholder' => 'Pilih fakultas...'],
        'pluginOptions' => [
            'allowClear' => true,
        ],
    ]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
