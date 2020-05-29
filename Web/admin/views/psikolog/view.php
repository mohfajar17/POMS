<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Psikolog */

$this->title = $model->id_psikolog;
$this->params['breadcrumbs'][] = ['label' => 'Psikologs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="psikolog-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id_psikolog], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id_psikolog], [
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
            'id_psikolog',
            'nama',
            'jenis_kelamin',
            'tempat_lahir',
            'tanggal_lahir',
            'alamat',
            'no_telefon',
            'email:email',
            'password',
            // 'token:ntext',
            // 'photo_profile',
            // 'status_verifikasi',
        ],
    ]) ?>

</div>
