<?php

use yii\helpers\Html;
// krajee
use kartik\form\ActiveForm;
use kartik\select2\Select2;
// model
use siska\models\StatusDosen;

/** @var yii\web\View $this */
/** @var siska\models\StatusDosen $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="status-dosen-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'status')->widget(Select2::classname(), [
        'data' => StatusDosen::dropdown(),
        'options' => ['placeholder' => 'Pilih Status...'],
        'pluginOptions' => [
            'allowClear' => true
        ],
    ]); ?>
    <div class="form-group">
        <?= Html::submitButton('Simpan', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
