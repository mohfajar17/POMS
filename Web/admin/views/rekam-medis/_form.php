<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\RekamMedis */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="rekam-medis-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'id_form')->textInput() ?>

    <?= $form->field($model, 'id_atlet')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'id_psikolog')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'nama')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'cabang_olahraga')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'waktu_input')->textInput() ?>

    <?= $form->field($model, 'sesi_latihan')->textInput() ?>

    <?= $form->field($model, 'catatan_fisik')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'kendala_mental_skill')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'hal_positif')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'catatan_psikolog')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'status_read')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
