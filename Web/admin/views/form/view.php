<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Form */

$this->title = $model->id_form;
$this->params['breadcrumbs'][] = ['label' => 'Forms', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="form-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id_form], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id_form], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id_form',
            'nama:ntext',
            'cabang_olahraga:ntext',
            'id_atlet',
            'id_psikolog',
            'waktu_input',
            'sesi_latihan',
            'antusiasme_pre_latih',
            'antusiasme_pos_latih',
            'fisik',
            'catatan_fisik:ntext',
            'stres',
            'konsentrasi',
            'keyakinan',
            'target',
            'lelah',
            'komunikasi',
            'intensitas',
            'hidrasi',
            'tidur',
            'nutrisi',
            'recovery',
            'recovery_lain:ntext',
            'mental_skill',
            'mental_skill_lain:ntext',
            'kendala_mental_skill:ntext',
            'saran_masalah',
            'saran_masalah_lain:ntext',
            'hal_positif:ntext',
            'scoring_mental',
            'scoring_fisik',
            'intensitas_target',
            'status',
        ],
    ]) ?>

</div>
