<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\FormSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Forms';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="form-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Form', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        // 'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            // 'id_form',
            'id_atlet',
            'nama:ntext',
            // 'cabang_olahraga:ntext',
            // 'id_psikolog',
            // 'waktu_input',
            // 'sesi_latihan',
            // 'antusiasme_pre_latih',
            // 'antusiasme_pos_latih',
            // 'fisik',
            // 'catatan_fisik:ntext',
            // 'stres',
            // 'konsentrasi',
            // 'keyakinan',
            // 'target',
            // 'lelah',
            // 'komunikasi',
            // 'hidrasi',
            // 'tidur',
            // 'nutrisi',
            // 'recovery',
            // 'recovery_lain:ntext',
            // 'mental_skill',
            // 'mental_skill_lain:ntext',
            // 'kendala_mental_skill:ntext',
            // 'saran_masalah',
            // 'saran_masalah_lain:ntext',
            // 'hal_positif:ntext',
            'scoring_mental',
            'scoring_fisik',
            'intensitas_target',
            'intensitas',
            // 'status',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
