<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\RekamMedisSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Rekam Medis';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="rekam-medis-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Rekam Medis', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        // 'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            // 'id_rekam_medis',
            // 'id_form',
            'id_atlet',
            'nama',
            'id_psikolog',
            // 'cabang_olahraga',
            // 'waktu_input',
            // 'sesi_latihan',
            // 'catatan_fisik:ntext',
            // 'kendala_mental_skill:ntext',
            // 'hal_positif:ntext',
            'catatan_psikolog:ntext',
            // 'status_read',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
