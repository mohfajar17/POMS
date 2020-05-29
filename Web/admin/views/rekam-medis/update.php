<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\RekamMedis */

$this->title = 'Update Rekam Medis: ' . $model->id_rekam_medis;
$this->params['breadcrumbs'][] = ['label' => 'Rekam Medis', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_rekam_medis, 'url' => ['view', 'id' => $model->id_rekam_medis]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="rekam-medis-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
