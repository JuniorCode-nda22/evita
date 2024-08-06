<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var siska\models\jenjangpendidikan $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="jenjangpendidikan-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'jenjang')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
