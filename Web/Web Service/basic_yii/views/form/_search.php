<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\FormSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="form-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id_form') ?>

    <?= $form->field($model, 'nama') ?>

    <?= $form->field($model, 'cabang_olahraga') ?>

    <?= $form->field($model, 'id_atlet') ?>

    <?= $form->field($model, 'id_psikolog') ?>

    <?php // echo $form->field($model, 'waktu_input') ?>

    <?php // echo $form->field($model, 'sesi_latihan') ?>

    <?php // echo $form->field($model, 'antusiasme_pre_latih') ?>

    <?php // echo $form->field($model, 'antusiasme_pos_latih') ?>

    <?php // echo $form->field($model, 'fisik') ?>

    <?php // echo $form->field($model, 'catatan_fisik') ?>

    <?php // echo $form->field($model, 'stres') ?>

    <?php // echo $form->field($model, 'konsentrasi') ?>

    <?php // echo $form->field($model, 'keyakinan') ?>

    <?php // echo $form->field($model, 'target') ?>

    <?php // echo $form->field($model, 'lelah') ?>

    <?php // echo $form->field($model, 'komunikasi') ?>

    <?php // echo $form->field($model, 'intensitas') ?>

    <?php // echo $form->field($model, 'hidrasi') ?>

    <?php // echo $form->field($model, 'tidur') ?>

    <?php // echo $form->field($model, 'nutrisi') ?>

    <?php // echo $form->field($model, 'recovery') ?>

    <?php // echo $form->field($model, 'recovery_lain') ?>

    <?php // echo $form->field($model, 'mental_skill') ?>

    <?php // echo $form->field($model, 'mental_skill_lain') ?>

    <?php // echo $form->field($model, 'kendala_mental_skill') ?>

    <?php // echo $form->field($model, 'saran_masalah') ?>

    <?php // echo $form->field($model, 'saran_masalah_lain') ?>

    <?php // echo $form->field($model, 'hal_positif') ?>

    <?php // echo $form->field($model, 'scoring_mental') ?>

    <?php // echo $form->field($model, 'scoring_fisik') ?>

    <?php // echo $form->field($model, 'intensitas_target') ?>

    <?php // echo $form->field($model, 'status') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
