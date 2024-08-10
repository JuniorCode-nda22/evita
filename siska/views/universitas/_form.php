<?php

use yii\helpers\Html;
// krajee
use kartik\form\ActiveForm;
use kartik\select2\Select2;
// model
use siska\models\Universitas;


/** @var yii\web\View $this */
/** @var siska\models\Universitas $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="universitas-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'nama_universitas')->widget(Select2::classname(), [
        'data' => Universitas::dropdown(),
        'options' => ['placeholder' => 'Pilih uiversitas...'],
        'pluginOptions' => [
            'allowClear' => true
        ],
    ]); ?>
    <div class="form-group">
        <?= Html::submitButton('Simpan ', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
