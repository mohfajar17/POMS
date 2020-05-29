<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Form */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="form-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'nama')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'cabang_olahraga')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'id_atlet')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'id_psikolog')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'waktu_input')->textInput() ?>

    <?= $form->field($model, 'sesi_latihan')->textInput() ?>

    <?= $form->field($model, 'antusiasme_pre_latih')->textInput() ?>

    <?= $form->field($model, 'antusiasme_pos_latih')->textInput() ?>

    <?= $form->field($model, 'fisik')->textInput() ?>

    <?= $form->field($model, 'catatan_fisik')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'stres')->textInput() ?>

    <?= $form->field($model, 'konsentrasi')->textInput() ?>

    <?= $form->field($model, 'keyakinan')->textInput() ?>

    <?= $form->field($model, 'target')->textInput() ?>

    <?= $form->field($model, 'lelah')->textInput() ?>

    <?= $form->field($model, 'komunikasi')->textInput() ?>

    <?= $form->field($model, 'intensitas')->textInput() ?>

    <?= $form->field($model, 'hidrasi')->textInput() ?>

    <?= $form->field($model, 'tidur')->textInput() ?>

    <?= $form->field($model, 'nutrisi')->textInput() ?>

    <?= $form->field($model, 'recovery')->textInput() ?>

    <?= $form->field($model, 'recovery_lain')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'mental_skill')->textInput() ?>

    <?= $form->field($model, 'mental_skill_lain')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'kendala_mental_skill')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'saran_masalah')->textInput() ?>

    <?= $form->field($model, 'saran_masalah_lain')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'hal_positif')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'scoring_mental')->textInput() ?>

    <?= $form->field($model, 'scoring_fisik')->textInput() ?>

    <?= $form->field($model, 'intensitas_target')->textInput() ?>

    <?= $form->field($model, 'status')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
