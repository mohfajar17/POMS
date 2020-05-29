<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Atlets';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="atlet-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Atlet', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id_atlet',
            // 'id_psikolog',
            'nama',
            'cabang_olahraga',
            // 'jenis_kelamin',
            // 'tempat_lahir',
            // 'tanggal_lahir',
            // 'alamat',
            // 'kota_asal',
            // 'no_telefon',
            // 'email:email',
            // 'password',
            // 'token:ntext',
            // 'photo_profile',
            // 'intensitas_target',
            'label',
            // 'status_verifikasi',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
