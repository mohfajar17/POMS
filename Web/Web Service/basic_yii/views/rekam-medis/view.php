<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\RekamMedis */

$this->title = $model->id_rekam_medis;
$this->params['breadcrumbs'][] = ['label' => 'Rekam Medis', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="rekam-medis-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id_rekam_medis], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id_rekam_medis], [
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
            'id_rekam_medis',
            'id_form',
            'id_atlet',
            'id_psikolog',
            'nama',
            'cabang_olahraga',
            'waktu_input',
            'sesi_latihan',
            'catatan_fisik:ntext',
            'kendala_mental_skill:ntext',
            'hal_positif:ntext',
            'catatan_psikolog:ntext',
            'status_read',
        ],
    ]) ?>

</div>
