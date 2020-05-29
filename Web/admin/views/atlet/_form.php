<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Atlet */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="atlet-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'id_atlet')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'id_psikolog')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'nama')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'cabang_olahraga')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'jenis_kelamin')->textInput() ?>

    <?= $form->field($model, 'tempat_lahir')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tanggal_lahir')->textInput() ?>

    <?= $form->field($model, 'alamat')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'kota_asal')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'no_telefon')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'email')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'password')->passwordInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'token')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'photo_profile')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'intensitas_target')->textInput() ?>

    <?= $form->field($model, 'label')->textInput() ?>

    <?= $form->field($model, 'status_verifikasi')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
