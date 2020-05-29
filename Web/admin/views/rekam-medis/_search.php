<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\RekamMedisSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="rekam-medis-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id_rekam_medis') ?>

    <?= $form->field($model, 'id_form') ?>

    <?= $form->field($model, 'id_atlet') ?>

    <?= $form->field($model, 'id_psikolog') ?>

    <?= $form->field($model, 'nama') ?>

    <?php // echo $form->field($model, 'cabang_olahraga') ?>

    <?php // echo $form->field($model, 'waktu_input') ?>

    <?php // echo $form->field($model, 'sesi_latihan') ?>

    <?php // echo $form->field($model, 'catatan_fisik') ?>

    <?php // echo $form->field($model, 'kendala_mental_skill') ?>

    <?php // echo $form->field($model, 'hal_positif') ?>

    <?php // echo $form->field($model, 'catatan_psikolog') ?>

    <?php // echo $form->field($model, 'status_read') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
