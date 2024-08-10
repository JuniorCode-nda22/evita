<?php


use yii\helpers\Html;
// krajee
use kartik\form\ActiveForm;
use kartik\select2\Select2;
// model
use siska\models\Wilayah;

/** @var yii\web\View $this */
/** @var siska\models\Wilayah $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="wilayah-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'kode')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'nama_wilayah')->widget(Select2::classname(), [
        'data' => Wilayah::dropdown(),
        'options' => ['placeholder' => 'Pilih wilatyah...'],
        'pluginOptions' => [
            'allowClear' => true
        ],
    ]); ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
