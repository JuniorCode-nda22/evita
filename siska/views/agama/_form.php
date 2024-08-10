<?php

use yii\helpers\Html;
// krajee
use kartik\form\ActiveForm;
use kartik\select2\Select2;
// model
use siska\models\Agama;

/** @var yii\web\View $this */
/** @var siska\models\Agama $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="agama-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'nama_agama')->widget(Select2::classname(), [
        'data' => Agama::dropdown(),
        'options' => ['placeholder' => 'Pilih Agama...'],
        'pluginOptions' => [
            'allowClear' => true
        ],
    ]); ?>

    <div class="form-group">
        <?= Html::submitButton('Simpan', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
